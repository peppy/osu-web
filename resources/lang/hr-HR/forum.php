<?php

/**
 *    Copyright (c) ppy Pty Ltd <contact@ppy.sh>.
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
    'pinned_topics' => '',
    'slogan' => "",
    'subforums' => '',
    'title' => '',

    'covers' => [
        'edit' => '',

        'create' => [
            '_' => '',
            'button' => '',
            'info' => '',
        ],

        'destroy' => [
            '_' => '',
            'confirm' => '',
        ],
    ],

    'forums' => [
        'latest_post' => '',

        'index' => [
            'title' => '',
        ],

        'topics' => [
            'empty' => '',
        ],
    ],

    'mark_as_read' => [
        'forum' => '',
        'forums' => '',
        'busy' => '',
    ],

    'post' => [
        'confirm_destroy' => '',
        'confirm_restore' => '',
        'edited' => '',
        'posted_at' => '',

        'actions' => [
            'destroy' => '',
            'restore' => '',
            'edit' => '',
        ],

        'create' => [
            'title' => [
                'reply' => '',
            ],
        ],

        'info' => [
            'post_count' => '',
            'topic_starter' => '',
        ],
    ],

    'search' => [
        'go_to_post' => '',
        'post_number_input' => '',
        'total_posts' => '',
    ],

    'topic' => [
        'deleted' => '',
        'go_to_latest' => '',
        'latest_post' => '',
        'latest_reply_by' => '',
        'new_topic' => '',
        'new_topic_login' => '',
        'post_reply' => '',
        'reply_box_placeholder' => '',
        'reply_title_prefix' => '',
        'started_by' => '',
        'started_by_verbose' => '',

        'create' => [
            'close' => '',
            'preview' => '',
            // TL note: this is used in the topic reply preview, when
            // the user goes back from previewing to editing the reply
            'preview_hide' => '',
            'submit' => '',

            'necropost' => [
                'default' => '',

                'new_topic' => [
                    '_' => "",
                    'create' => '',
                ],
            ],

            'placeholder' => [
                'body' => '',
                'title' => '',
            ],
        ],

        'jump' => [
            'enter' => '',
            'first' => '',
            'last' => '',
            'next' => '',
            'previous' => '',
        ],

        'post_edit' => [
            'cancel' => '',
            'post' => '',
        ],
    ],

    'topic_watches' => [
        'index' => [
            'title_compact' => '',

            'box' => [
                'total' => '',
                'unread' => '',
            ],

            'info' => [
                'total' => '',
                'unread' => '',
            ],
        ],

        'topic_buttons' => [
            'remove' => [
                'confirmation' => '',
                'title' => '',
            ],
        ],
    ],

    'topics' => [
        '_' => '',

        'actions' => [
            'login_reply' => '',
            'reply' => '',
            'reply_with_quote' => '',
            'search' => '',
        ],

        'create' => [
            'create_poll' => '',

            'preview' => '',

            'create_poll_button' => [
                'add' => '',
                'remove' => '',
            ],

            'poll' => [
                'hide_results' => '',
                'hide_results_info' => '',
                'length' => '',
                'length_days_suffix' => '',
                'length_info' => '',
                'max_options' => '',
                'max_options_info' => '',
                'options' => '',
                'options_info' => '',
                'title' => '',
                'vote_change' => '',
                'vote_change_info' => '',
            ],
        ],

        'edit_title' => [
            'start' => '',
        ],

        'index' => [
            'feature_votes' => '',
            'replies' => '',
            'views' => '',
        ],

        'issue_tag_added' => [
            'to_0' => '',
            'to_0_done' => '',
            'to_1' => '',
            'to_1_done' => '',
        ],

        'issue_tag_assigned' => [
            'to_0' => '',
            'to_0_done' => '',
            'to_1' => '',
            'to_1_done' => '',
        ],

        'issue_tag_confirmed' => [
            'to_0' => '',
            'to_0_done' => '',
            'to_1' => '',
            'to_1_done' => '',
        ],

        'issue_tag_duplicate' => [
            'to_0' => '',
            'to_0_done' => '',
            'to_1' => '',
            'to_1_done' => '',
        ],

        'issue_tag_invalid' => [
            'to_0' => '',
            'to_0_done' => '',
            'to_1' => '',
            'to_1_done' => '',
        ],

        'issue_tag_resolved' => [
            'to_0' => '',
            'to_0_done' => '',
            'to_1' => '',
            'to_1_done' => '',
        ],

        'lock' => [
            'is_locked' => '',
            'to_0' => '',
            'to_0_done' => '',
            'to_1' => '',
            'to_1_done' => '',
        ],

        'moderate_move' => [
            'title' => '',
        ],

        'moderate_pin' => [
            'to_0' => '',
            'to_0_done' => '',
            'to_1' => '',
            'to_1_done' => '',
            'to_2' => '',
            'to_2_done' => '',
        ],

        'moderate_toggle_deleted' => [
            'show' => '',
            'hide' => '',
        ],

        'show' => [
            'deleted-posts' => '',
            'total_posts' => '',

            'feature_vote' => [
                'current' => '',
                'do' => '',

                'info' => [
                    '_' => '',
                    'feature_request' => '',
                    'supporters' => '',
                ],

                'user' => [
                    'count' => '',
                    'current' => '',
                    'not_enough' => "",
                ],
            ],

            'poll' => [
                'edit' => '',
                'edit_warning' => '',
                'vote' => '',

                'button' => [
                    'change_vote' => '',
                    'edit' => '',
                    'view_results' => '',
                    'vote' => '',
                ],

                'detail' => [
                    'end_time' => '',
                    'ended' => '',
                    'results_hidden' => '',
                    'total' => '',
                ],
            ],
        ],

        'watch' => [
            'to_not_watching' => '',
            'to_watching' => '',
            'to_watching_mail' => '',
            'tooltip_mail_disable' => '',
            'tooltip_mail_enable' => '',
        ],
    ],
];
