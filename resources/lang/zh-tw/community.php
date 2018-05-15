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
    'support' => [
        'header' => [
            // size in font-size
            'big_description' => '喜歡 osu! 嗎！？<br/>
                                那就支持 osu! 開發者吧 (￣3￣)',
            'small_description' => '',
            'support_button' => '我想支持 osu!',
        ],

        'dev_quote' => 'osu! 是一款完全免費的遊戲，但是經營它卻不是免費的。在我們租用服務器和高速網絡、維護系統及社區、向比賽提供獎品、提供疑難解答以及讓玩家們開心的同時，osu! 已經消耗了大量的金錢！噢，別忘了我們是憑著愛好在做 osu! ，沒有任何的廣告合作！
            <br/><br/>osu! 由我一個人運營著，
            為了維護 osu! 我已經辭去了我的日常工作，
            而我時常感受到使 osu! 維持我所期望的質量是一件很艱難的事情，
            我以個人的名義感謝至今為止所有支持 osu! 的人，
            也包括繼續支持 osu! 的所有人 :)。',

        'supporter_status' => [
            'contribution' => '感谢你一直以来的支持！你已经捐赠了 :dollars 并购买了 :tags 次支持者标签！',
            'gifted' => '你已经捐赠了 :giftedTags 次支持者标签（花费了 :giftedDollars ），真慷慨啊！',
            'not_yet' => "你还没有支持者标签 :(",
            'title' => '当前支持者状态',
            'valid_until' => '你的支持者标签将在 :date 到期',
            'was_valid_until' => '你的支持者标签已于 :date 到期',
        ],

        'why_support' => [
            'title' => '為什麼要支持 osu! ？',
            'blocks' => [
                'dev' => 'osu! 最初是 ppy 個人開發和維護的',
                'time' => '運營它的成本和投入的精力已經超出了“興趣”的範圍',
                'ads' => '無廣告 <br/><br/>
                        不像 99.95% 的網站，我們不推送廣告，也沒有從中獲利。',
                'goodies' => '解鎖更多高級功能！',
            ],
        ],

        'perks' => [
            'title' => '我能得到什麼？',
            'osu_direct' => [
                'title' => 'osu!direct',
                'description' => '在遊戲客戶端內搜索和下載譜面。',
            ],

            'auto_downloads' => [
                'title' => '自動下載',
                'description' => '本地沒有需要的譜面時，osu! 會自動下載！',
            ],

            'upload_more' => [
                'title' => '上傳更多譜面',
                'description' => '譜面集中 Pending 譜面上限增加到 10 張。',
            ],

            'early_access' => [
                'title' => '搶先體驗',
                'description' => '搶先體驗正在測試中的新特性！',
            ],

            'customisation' => [
                'title' => '個性化',
                'description' => '自定義個人資料頁。',
            ],

            'beatmap_filters' => [
                'title' => '譜面篩選器',
                'description' => '更多角度的去篩選譜面。',
            ],

            'yellow_fellow' => [
                'title' => '高亮用戶名',
                'description' => '聊天時，用戶名會變成亮黃色。',
            ],

            'speedy_downloads' => [
                'title' => '高速下載',
                'description' => '更快的下載速度，尤其是使用 osu!direct 時。',
            ],

            'change_username' => [
                'title' => '修改用戶名',
                'description' => '修改用戶名而不需要支付費用（最多 1 次）。',
            ],

            'skinnables' => [
                'title' => '更多的定製',
                'description' => '自定義更多的遊戲界面元素，例如主菜單的背景。',
            ],

            'feature_votes' => [
                'title' => '新特性投票',
                'description' => '為新特性請求投票（每月 2 票）。',
            ],

            'sort_options' => [
                'title' => '排名',
                'description' => '查看排名時可按 國家/好友/所選MOD 進行排名。',
            ],

            'feel_special' => [
                'title' => '滿足感',
                'description' => '對 “幫助 osu! 繼續運營” 感到滿足！',
            ],

            'more_to_come' => [
                'title' => '更多特性即將到來',
                'description' => '',
            ],
        ],

        'convinced' => [
            'title' => '可以可以，買買買！',
            'support' => '支持 osu!',
            'gift' => '或者以禮物方式贈送給其它玩家',
            'instructions' => '點擊愛心前往 osu! 商店',
        ],
    ],
];