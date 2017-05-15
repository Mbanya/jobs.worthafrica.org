@if($post->apply_elsewhere)
    <h2>{{ t('How to apply')  }}</h2>
    {!! parseDown($post->apply_to) !!}
@else
    <br>
    <button class="btn btn-info btn-lg applyFormButton">Apply for this position</button>

    <div class="applyForm">
        <br>
        {!! Form::open(['url'=>route('posts.apply', ['id' => $post->id, 'slug' => $post->slug]),'files'=> true,'role'=>'form']) !!}
        <div class="form-group">
            {!! Form::label('name', t('Name')) !!}*
            {!! Form::text('name',null,array('class'=>'form-control','id'=>'username','placeholder'=> t('Name'), 'required')) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', t('Email address')) !!}*
            {!! Form::text('email',null,array('class'=>'form-control','id'=>'username','placeholder'=> t('Email address'), 'required')) !!}
        </div>
        <div class="form-group">
            {!! Form::label('phone', t('Phone')) !!}*
            {!! Form::text('phone',null,array('class'=>'form-control','id'=>'username','placeholder'=> t('Phone'), 'required')) !!}
        </div>
        <div class="form-group">
            {!! Form::label('resume', t('Resume')) !!}* <small>{{ t('Max size') }} {{ maxApplyFileUploadSize() }}MB</small>
            {!! Form::file('resume',['accept'=>'*/*']) !!}
        </div>
        <div class="form-group">
            <label for="recaptcha">{{ t('Type these words') }}
                <small>*</small>
            </label>
            {!! Recaptcha::render() !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Submit Application', ['class' => 'btn btn-info']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endif
