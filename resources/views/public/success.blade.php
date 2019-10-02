@extends('layouts.index')

@section('title', trans('pub.page.success.title'))

@section('content')
    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">

                    <h2 class="page-title">@lang('pub.page.success.text1')</h2>
                    <p>@lang('pub.page.success.text2')</p>

                    <p>
                        @if($worktime)
                            @lang('pub.page.success.text3')
                        @else
                            @lang('pub.page.success.text3.offtime')
                        @endif

                    </p>

                    <div class="gap-40">&nbsp;</div>
                </div><!-- Content Col end -->

            </div><!-- Main row end -->

        </div><!-- Conatiner end -->
    </section><!-- Main container end -->
@endsection