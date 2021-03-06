###
#    Copyright (c) ppy Pty Ltd <contact@ppy.sh>.
#
#    This file is part of osu!web. osu!web is distributed with the hope of
#    attracting more community contributions to the core ecosystem of osu!.
#
#    osu!web is free software: you can redistribute it and/or modify
#    it under the terms of the Affero GNU General Public License version 3
#    as published by the Free Software Foundation.
#
#    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
#    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
#    See the GNU Affero General Public License for more details.
#
#    You should have received a copy of the GNU Affero General Public License
#    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
###

import { Comment } from 'comment'
import { CommentEditor } from 'comment-editor'
import { CommentShowMore } from 'comment-show-more'
import { CommentsSort } from 'comments-sort'
import DeletedCommentsCount from 'deleted-comments-count'
import { Observer } from 'mobx-react'
import core from 'osu-core-singleton'
import * as React from 'react'
import { button, div, h2, span } from 'react-dom-factories'
import { Spinner } from 'spinner'

el = React.createElement

store = core.dataStore.commentStore
uiState = core.dataStore.uiState

export class Comments extends React.PureComponent
  render: =>
    el Observer, null, () =>
      # TODO: comments should be passed in as props?
      comments = uiState.comments.topLevelCommentIds.map (id) -> store.comments.get(id)
      pinnedComments = uiState.comments.pinnedCommentIds.map (id) -> store.comments.get(id)

      div className: osu.classWithModifiers('comments', @props.modifiers),
        div className: 'u-has-anchor u-has-anchor--no-event',
          div(className: 'fragment-target', id: 'comments')
        h2 className: 'comments__title',
          osu.trans('comments.title')
          span className: 'comments__count', osu.formatNumber(uiState.comments.total)

        if pinnedComments.length > 0
          div className: "comments__items comments__items--pinned",
            @renderComments pinnedComments, true

        div className: 'comments__new',
          el CommentEditor,
            commentableType: @props.commentableType
            commentableId: @props.commentableId
            focus: false
            modifiers: @props.modifiers

        div className: 'comments__items comments__items--toolbar',
          el CommentsSort,
            modifiers: @props.modifiers
          div className: osu.classWithModifiers('sort', @props.modifiers),
            div className: 'sort__items',
              @renderFollowToggle()
              @renderShowDeletedToggle()

        if comments.length > 0
          div className: "comments__items #{if uiState.comments.loadingSort? then 'comments__items--loading' else ''}",
            @renderComments comments, false

            el DeletedCommentsCount, { comments, showDeleted: uiState.comments.isShowDeleted, modifiers: ['top'] }

            el CommentShowMore,
              commentableType: @props.commentableType
              commentableId: @props.commentableId
              comments: comments
              total: uiState.comments.topLevelCount
              sort: uiState.comments.currentSort
              modifiers: _.concat 'top', @props.modifiers
        else
          div
            className: 'comments__items comments__items--empty'
            osu.trans('comments.empty')


  renderComment: (comment, pinned = false) =>
    return null if comment.isDeleted && !uiState.comments.isShowDeleted

    el Comment,
      key: comment.id
      comment: comment
      depth: 0
      modifiers: @props.modifiers
      showDeleted: uiState.comments.isShowDeleted
      expandReplies: if pinned then false else null


  renderComments: (comments, pinned) =>
    @renderComment(comment, pinned) for comment in comments when comment.pinned == pinned


  renderShowDeletedToggle: =>
    button
      type: 'button'
      className: 'sort__item sort__item--button'
      onClick: @toggleShowDeleted
      span className: 'sort__item-icon',
        span className: if uiState.comments.isShowDeleted then 'fas fa-check-square' else 'far fa-square'
      osu.trans('common.buttons.show_deleted')


  renderFollowToggle: =>
    if uiState.comments.userFollow
      icon = 'fas fa-eye-slash'
      label = osu.trans('common.buttons.watch.to_0')
    else
      icon = 'fas fa-eye'
      label = osu.trans('common.buttons.watch.to_1')

    iconEl =
      if @props.loadingFollow
        el Spinner, modifiers: ['center-inline']
      else
        span className: icon

    button
      type: 'button'
      className: 'sort__item sort__item--button'
      onClick: @toggleFollow
      disabled: @props.loadingFollow
      span className: 'sort__item-icon', iconEl
      label


  toggleShowDeleted: ->
    $.publish 'comments:toggle-show-deleted'


  toggleFollow: ->
    $.publish 'comments:toggle-follow'
