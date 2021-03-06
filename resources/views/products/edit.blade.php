@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.products.title')</h3>
    
    {!! Form::model($product, ['method' => 'PUT', 'route' => ['products.update', $product->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('category_id', 'Category*', ['class' => 'control-label']) !!}
                    {!! Form::select('category_id', $categories, old('category_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('category_id'))
                        <p class="help-block">
                            {{ $errors->first('category_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('source_url', 'Source url*', ['class' => 'control-label']) !!}
                    {!! Form::text('source_url', old('source_url'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('source_url'))
                        <p class="help-block">
                            {{ $errors->first('source_url') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', 'Product Name*', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('sku', 'Sku', ['class' => 'control-label']) !!}
                    {!! Form::text('sku', old('sku'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('sku'))
                        <p class="help-block">
                            {{ $errors->first('sku') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('old_price', 'Old price', ['class' => 'control-label']) !!}
                    {!! Form::text('old_price', old('old_price'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('old_price'))
                        <p class="help-block">
                            {{ $errors->first('old_price') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('new_price', 'New price', ['class' => 'control-label']) !!}
                    {!! Form::text('new_price', old('new_price'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('new_price'))
                        <p class="help-block">
                            {{ $errors->first('new_price') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('regular_price', 'Regular price', ['class' => 'control-label']) !!}
                    {!! Form::text('regular_price', old('regular_price'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('regular_price'))
                        <p class="help-block">
                            {{ $errors->first('regular_price') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('description', 'Description*', ['class' => 'control-label']) !!}
                    {!! Form::textarea('description', old('description'), ['class' => 'form-control editor', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('description'))
                        <p class="help-block">
                            {{ $errors->first('description') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('first_accordion_content', 'First accordion content', ['class' => 'control-label']) !!}
                    {!! Form::textarea('first_accordion_content', old('first_accordion_content'), ['class' => 'form-control editor', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('first_accordion_content'))
                        <p class="help-block">
                            {{ $errors->first('first_accordion_content') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('second_accordion_content', 'Second accordion content', ['class' => 'control-label']) !!}
                    {!! Form::textarea('second_accordion_content', old('second_accordion_content'), ['class' => 'form-control editor', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('second_accordion_content'))
                        <p class="help-block">
                            {{ $errors->first('second_accordion_content') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('images', 'Images', ['class' => 'control-label']) !!}
                    {!! Form::select('images[]', $images, old('images') ? old('images') : $product->images->pluck('id')->toArray(), ['class' => 'form-control select2', 'multiple' => 'multiple']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('images'))
                        <p class="help-block">
                            {{ $errors->first('images') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('colors', 'Colors', ['class' => 'control-label']) !!}
                    {!! Form::select('colors[]', $colors, old('colors') ? old('colors') : $product->colors->pluck('id')->toArray(), ['class' => 'form-control select2', 'multiple' => 'multiple']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('colors'))
                        <p class="help-block">
                            {{ $errors->first('colors') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('sizes', 'Sizes', ['class' => 'control-label']) !!}
                    {!! Form::select('sizes[]', $sizes, old('sizes') ? old('sizes') : $product->sizes->pluck('id')->toArray(), ['class' => 'form-control select2', 'multiple' => 'multiple']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('sizes'))
                        <p class="help-block">
                            {{ $errors->first('sizes') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
    @parent
    <script src="//cdn.ckeditor.com/4.5.4/full/ckeditor.js"></script>
    <script>
        $('.editor').each(function () {
            CKEDITOR.replace($(this).attr('id'));
        });
    </script>

@stop