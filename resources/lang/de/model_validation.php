<?php

/**
 *    Copyright 2015-2017 ppy Pty. Ltd.
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
    'not_negative' => ':attribute kann nicht negativ sein.',
    'required' => ':attribute ist erforderlich.',
    'too_long' => ':attribute hat die maximale Länge überschritten - höchstens :limit Zeichen.',
    'wrong_confirmation' => 'Bestätigung stimmt nicht überein.',

    'beatmap_discussion' => [
        'hype' => [
            'guest' => 'Zum Hypen muss man eingeloggt sein.',
            'hyped' => 'Du hast diese Beatmap bereits gehypt.',
            'limit_exceeded' => 'Du hast all dein Hype verbraucht.',
            'not_hypeable' => 'Diese Beatmap kann nicht gehypt werden',
            'owner' => 'Du kannst deine eigene Beatmap nicht hypen.',
        ],
    ],

    'beatmap_discussion_post' => [
        'first_post' => 'Der erste Beitrag kann nicht gelöscht werden.',
    ],

    'forum' => [
        'feature_vote' => [
            'not_feature_topic' => 'Du kannst nur auf Featurewünsche abstimmen.',
            'not_enough_feature_votes' => 'Nicht genug Stimmen.',
        ],

        'poll_vote' => [
            'invalid' => 'Ungültige Antwort angegeben.',
        ],

        'post' => [
            'beatmapset_post_no_delete' => 'Den Metadaten-Beitrag einer Beatmap kann man nicht löschen.',
            'beatmapset_post_no_edit' => 'Den Metadaten-Beitrag einer Beatmap kann man nicht bearbeiten.',
        ],

        'topic_poll' => [
            'duplicate_options' => 'Die gleiche Antwort kann nicht doppelt enthalten sein.',
            'invalid_max_options' => 'Die Zahl an Antworten pro Benutzer kann die Anzahl an Antworten nicht überschreiten.',
            'minimum_one_selection' => 'Mindestens eine Antwort wird pro Benutzer benötigt.',
            'minimum_two_options' => 'Mindestens zwei Antworten werden benötigt .',
            'too_many_options' => 'Maximale Anzahl an Antworten überschritten',
        ],

        'topic_vote' => [
            'too_many' => 'Mehr Antworten als erlaubt ausgewählt.',
        ],
    ],

    'user' => [
        'contains_username' => 'Das Passwort darf den Nutzernamen nicht enthalten.',
        'email_already_used' => 'E-Mail-Adresse wird bereits verwendet.',
        'invalid_country' => 'Das Land ist nicht in der Datenbank.',
        'invalid_email' => "Scheint keine E-Mail-Adresse zu seín.",
        'too_short' => 'Das neue Passwort ist zu kurz.',
        'unknown_duplicate' => 'Nutzername oder E-Mail-Adresse wird bereits verwendet.',
        'username_too_short' => 'Der angeforderte Nutzername ist zu kurz.',
        'weak' => 'Das Passwort ist auf einer Blacklist.',
        'wrong_current_password' => 'Das aktuelle Passwort ist falsch.',
        'wrong_email_confirmation' => 'E-Mail-Bestätigung stimmt nicht überein.',
        'wrong_password_confirmation' => 'Passwortbestätigung stimmt nicht überein.',
        'too_long' => 'Maximale Länge überschritten - höchstens :limit Zeichen.',
    ],
];
