{!! Form::myInput('text', 'title', 'Tên') !!}
{!! Form::myInput('text', 'description', 'Mô tả') !!}
<div class="form-group">
    <label>Hình ảnh</label>
    <div class="input-group">
        <span class="input-group-btn">
            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                <i class="fa fa-picture-o"></i> Chọn hình ảnh
            </a>
        </span>
        {!! Form::text('image', null, ['id' => 'thumbnail', 'class' => 'form-control', 'readonly'])  !!}
    </div>
    <div>
        <img
                id="holder" style="max-width:240px; @isset($item) margin-top: 15px; margin-bottom: 15px @endisset"
                @isset($item)
                src="{{ \App\Helpers\Url::LFMUrl($item->image) }}"
                @endisset
        />
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="{{ asset('/vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
<script>
    $('#lfm').filemanager('image', {
        prefix: '{{ config('lfm.url_prefix', 'lfm_upload')}}'
    });
</script>