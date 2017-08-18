  <div id="tf-contact" class="text-center">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <div class="section-title center">
                        <h2>Siéntete libre de <strong>contactarnos</strong></h2>
                        <div class="line">
                            <hr>
                        </div>
                        <div class="clearfix"></div>
                        <small><em>Simplicidad a la hora de responder.</em></small>            
                    </div>
                    {!! Form::open()!!}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('exampleInputEmail1', 'Email address') !!}
                                {!! Form::text('exampleInputEmail1', 'Enter emai', ['class'=>'form-control', 'required']) !!}

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('exampleInputPassword1', 'Password') !!}
                                {!! Form::text('exampleInputPassword1', 'password', ['class'=>'form-control', 'required', 'id'=>'exampleInputPassword1']) !!}

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                       
                        {!! Form::label('exampleInputEmail1', 'Message') !!}
                        
                        {!! Form::text('exampleInputPassword1', 'message', ['class'=>'form-control', 'required', 'rows'=>'3']) !!}
                        
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>