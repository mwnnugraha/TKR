
                            
                            <div class="form-group{{ $errors->has('nama') ? 'has-error' : '' }}">
                            <div>
                                {!! Form::label('nama','Nama :',['class'=>'col-md-4 col-md-offset-2']) !!}
                                
                            </div>
                                <div class="col-md-4">
                                   <input type="text" name="nama" class="btn btn-default btn-block" required=""></input>
                                    {!! $errors->first('nama','<p class="help-block">:message</p>') !!}
                                </div>
                            </div>

                              <div class="form-group{{ $errors->has('testimonni') ? 'has-error' : '' }}">
                            <div>
                                {!! Form::label('testimoni','Testimoni :',['class'=>'col-md-4 col-md-offset-2']) !!}
                                
                            </div>
                                <div class="col-md-4">
                                    <textarea name="testimoni" class="btn btn-default btn-block" style="height: 200px; width: 250px" required=""></textarea>
                                    {!! $errors->first('testimoni','<p class="help-block">:message</p>') !!}
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('foto') ? 'has-error' : '' }}">
                            	{!! Form::label('foto','Foto Alumni :',['class'=>'col-md-4 col-md-offset-2']) !!}
                                <div class="col-md-4">
                                @if(isset($alumni) && $alumni->foto)
                                <p>
                                    {!! Html::image(asset('image/'.$alumni->foto),null,['class'=>'img-rounded img-responsive']) !!}
                                </p>
                                @endif
                                    <input type="file" name="foto" class="btn btn-default btn-block" required=""></input>
                                    {!! $errors->first('foto','<p class="help-block">:message</p>') !!}
                                </div>
                              </div> 
                            
                            <div class="form-group" align="center">
                                <div class="col-md-8 col-md-offset-2">
                                <br>
                                <center>
                                {!! Form::submit('Simpan Alumni', ['class'=>'btn btn-primary pull-right']) !!}
                                </center>
                                </div>
                            </div>
