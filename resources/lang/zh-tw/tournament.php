<?php

/**
 *    Copyright 2015-2018 ppy Pty. Ltd.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

return [
    'index' => [
        'header' => [
            'subtitle' => '官方認可的比賽列表',
            'title' => '社區比賽',
        ],
        'none_running' => '目前沒有正在進行的比賽，過段時間再來看看吧！',
        'registration_period' => '報名時間： :start 到 :end',
    ],

    'show' => [
        'banner' => '支持你的队伍',
        'entered' => '你已報名此次比賽。<br><br>這不意味著你已經被分組。<br><br>比賽開始前你將收到郵件通知，所以請確保你的 osu! 郵箱可用！',
        'info_page' => '信息页',
        'login_to_register' => '請 :login 以查看報名細節！',
        'not_yet_entered' => '你還沒有報名此次比賽。',
        'rank_too_low' => '抱歉，你還沒有達到本次比賽的排名要求！',
        'registration_ends' => '報名於 :date 結束',

        'button' => [
            'cancel' => '取消報名',
            'register' => '我要報名！',
        ],

        'state' => [
            'before_registration' => '本次比赛还未开始报名。',
            'ended' => '本次比赛已经结束。移步信息页查看比赛结果。',
            'registration_closed' => '本次比赛已停止报名。移步信息页查看最新信息。',
            'running' => '本次比赛正在进行。移步信息页查看赛况。',
        ],
    ],
    'tournament_period' => ':start 到 :end',
];