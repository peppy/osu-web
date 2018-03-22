﻿// Copyright (c) 2007-2018 ppy Pty Ltd <contact@ppy.sh>.
// Licensed under the MIT Licence - https://raw.githubusercontent.com/ppy/osu/master/LICENCE

using System;
using osu.Framework.Graphics;
using osu.Game.Rulesets.Judgements;
using osu.Game.Rulesets.Objects.Drawables;
using osu.Game.Rulesets.Objects.Types;
using OpenTK;
using osu.Game.Rulesets.Scoring;

namespace osu.Game.Rulesets.Catch.Objects.Drawable
{
    public abstract class PalpableCatchHitObject<TObject> : DrawableCatchHitObject<TObject>
        where TObject : CatchHitObject
    {
        public override bool CanBePlated => true;

        protected PalpableCatchHitObject(TObject hitObject)
            : base(hitObject)
        {
            Scale = new Vector2(HitObject.Scale);
        }
    }

    public abstract class DrawableCatchHitObject<TObject> : DrawableCatchHitObject
        where TObject : CatchHitObject
    {
        public new TObject HitObject;

        protected DrawableCatchHitObject(TObject hitObject)
            : base(hitObject)
        {
            HitObject = hitObject;
            Anchor = Anchor.BottomLeft;
        }
    }

    public abstract class DrawableCatchHitObject : DrawableHitObject<CatchHitObject>
    {
        public virtual bool CanBePlated => false;

        protected DrawableCatchHitObject(CatchHitObject hitObject)
            : base(hitObject)
        {
            RelativePositionAxes = Axes.X;
            X = hitObject.X;
        }

        public Func<CatchHitObject, bool> CheckPosition;

        protected override void CheckForJudgements(bool userTriggered, double timeOffset)
        {
            if (CheckPosition == null) return;

            if (timeOffset >= 0)
                AddJudgement(new Judgement { Result = CheckPosition.Invoke(HitObject) ? HitResult.Perfect : HitResult.Miss });
        }

        private const float preempt = 1000;

        protected override void UpdateState(ArmedState state)
        {
            using (BeginAbsoluteSequence(HitObject.StartTime - preempt))
                this.FadeIn(200);

            var endTime = (HitObject as IHasEndTime)?.EndTime ?? HitObject.StartTime;

            using (BeginAbsoluteSequence(endTime, true))
            {
                switch (state)
                {
                    case ArmedState.Miss:
                        this.FadeOut(250).RotateTo(Rotation * 2, 250, Easing.Out).Expire();
                        break;
                    case ArmedState.Hit:
                        this.FadeOut().Expire();
                        break;
                }
            }
        }
    }
}