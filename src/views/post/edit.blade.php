@extends ('forum::master')

@section ('content')
@include ('forum::partials.breadcrumbs', compact('parentCategory', 'category', 'thread'))

<h2>{{ trans('forum::posts.edit') }} ({{$thread->title}})</h2>

@include (
    'forum::post.partials.edit',
    array(
        'form_url'          => $post->editRoute,
        'form_classes'      => '',
        'show_title_field'  => false,
        'post_content'      => $post->content,
        'submit_label'      => trans('forum::posts.edit'),
        'cancel_url'        => $post->thread->route
    )
)
@overwrite
