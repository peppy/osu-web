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
    'admin' => [
        'warehouse' => '倉庫',
    ],

    'checkout' => [
        'cart_problems' => '糟糕，您的購物車出現問題！',
        'cart_problems_edit' => '點擊此處以編輯。',
        'declined' => '付款被取消。',
        'error' => '結帳時出現錯誤 :(',
        'old_cart' => '您的購物車已過期，請重試。',
        'pay' => '使用 Paypal 付款',
        'pending_checkout' => [
            'line_1' => '先前的訂單尚未完成',
            'line_2' => '透過選擇付款方式來恢復訂單，或者 :link 取消訂單。',
            'link_text' => '點擊這裡',
        ],
        'delayed_shipping' => '感謝您的訂購，由於近期湧入訂單過多，故該訂單恐將**延後1~2週的時間**',
    ],

    'discount' => '折扣 :percent%',

    'mail' => [
        'payment_completed' => [
            'subject' => '我們已收到您的 osu!商店 訂單！',
        ],
    ],

    'order' => [
        'item' => [
            'display_name' => [
                'supporter_tag' => ':name 給 :username （:duration）',
            ],
            'quantity' => '數量',
        ],
    ],

    'product' => [
        'name' => '名稱',

        'stock' => [
            'out' => '賣完了呢( ´_ゝ｀) 過段時間再回來看看吧。',
            'out_with_alternative' => '很抱歉您所選擇的項目已售完(´；ω；`) 請選擇其他項目或過段時間再回來看看吧。',
        ],

        'add_to_cart' => '加入到購物車',
        'notify' => '可訂購時通知我 !',

        'notification_success' => '當商品有貨時會收到通知，點擊 :link 以取消該通知',
        'notification_remove_text' => '這裡',

        'notification_in_stock' => '新商品，快來買買買！',
    ],

    'supporter_tag' => [
        'gift' => '要贈與的玩家',
        'require_login' => [
            '_' => '您需要 :link 以獲得 Supporter 標籤！',
            'link_text' => '登入',
        ],
    ],

    'username_change' => [
        'check' => '输入使用者名稱並檢查是否可用',
        'checking' => '正在檢查 :username 是否可用。。。',
        'require_login' => [
            '_' => '需要 :link 才能變更使用者名稱！',
            'link_text' => '登入',
        ],
    ],
];