// Copyright (c) 2007-2017 ppy Pty Ltd <contact@ppy.sh>.
// Licensed under the MIT Licence - https://raw.githubusercontent.com/ppy/osu/master/LICENCE

namespace osu.Game.Rulesets.Timing
{
    public class TimingSection
    {
        /// <summary>
        /// The time at which this timing section starts.
        /// </summary>
        public double Time;

        /// <summary>
        /// The beat length.
        /// </summary>
        public double BeatLength = 500;

        /// <summary>
        /// The speed multiplier.
        /// </summary>
        public double SpeedMultiplier = 1;
    }
}