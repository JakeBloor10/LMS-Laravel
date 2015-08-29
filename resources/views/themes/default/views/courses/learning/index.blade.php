@extends('themes/default/views/layouts/layout')

@section('content')

        <!-- Courses Header -->
<div class="content-header">
    <div class="header-section">
        <h1>
            <i class="gi gi-book_open"></i>Bienvenido a<strong> PHP Virtual Academy</strong><br><small>Catalogo de Cursos!</small>
        </h1>
    </div>
</div>
<ul class="breadcrumb breadcrumb-top">
    <li>Cursos</li>
</ul>
<!-- END Courses Header -->

<!-- Main Row -->
<div class="row">
    <div class="col-md-8">
        <!-- Courses Content -->
        <div class="row">
            <?php
            $colors = ['default','fire', 'flatie']
            ?>
            @foreach($courses as $course)
                    <!-- Course Widget -->
            <div class="col-sm-6">
                <div class="widget">
                    <div class="widget-advanced">
                        <!-- Widget Header -->
                        <div class="widget-header text-center themed-background-dark-{{{ $colors[$course->level - 1] }}}">
                            <div class="widget-options">
                                <button class="btn btn-xs btn-default" data-toggle="tooltip" title="Favorito!"><i class="fa fa-heart text-danger"></i></button>
                            </div>
                            <h3 class="widget-content-light">
                                <a href="{{{ route('learning.course.show', $course->id) }}}" class="themed-color-{{{ $colors[$course->level - 1] }}}">{{{ $course->name }}}</a><br>
                                <small>
                                    {{{ $course->level_name }}}
                                </small>
                            </h3>
                        </div>
                        <!-- END Widget Header -->

                        <!-- Widget Main -->
                        <div class="widget-main">
                            <a href="{{{ route('learning.course.show', $course->id) }}}" class="widget-image-container animation-fadeIn">
                                <span class="widget-icon themed-background-{{{ $colors[$course->level - 1] }}}"><i class="fa fa-code"></i></span>
                            </a>
                            <a href="{{{ route('learning.course.show', $course->id) }}}" class="btn btn-sm btn-default pull-right">
                                {{{ count($course->modules) }}} Modulos
                            </a>
                            <a href="{{{ route('learning.course.show', $course->id) }}}" class="btn btn-sm btn-success">
                                {{{ $course->value_current }}}
                            </a>
                        </div>
                        <!-- END Widget Main -->
                    </div>
                </div>
            </div>
            <!-- END Course Widget -->
            @endforeach
        </div>
        <!-- END Courses Content -->
    </div>
    <div class="col-md-4">
        @include('themes/default/views/layouts/widget/account')
    </div>
</div>
<!-- END Main Row -->

@stop