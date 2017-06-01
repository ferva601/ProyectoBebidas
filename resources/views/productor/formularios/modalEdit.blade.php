<?php $paises = DB::table('pais')
                  ->orderBy('pais')
                  ->select('id', 'pais')
                  ->get();

   $provincias = DB::table('provincia_region')
                     ->orderBy('provincia')
                     ->select('id', 'provincia')
                     ->get(); ?>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Actualizar Productor</h4>
         </div>
      
         <div class="modal-body">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            
            {!! Form::open() !!}
               {!! Form::hidden('id', null, ['id' => 'id']) !!}
               {!! Form::hidden('saldo', null, ['id' => 'saldo']) !!}
               {!! Form::hidden('estado_datos', null, ['id' => 'estado_datos']) !!}
               {!! Form::hidden('reclamada', null, ['id' => 'reclamada']) !!}

               <div class="form-group">
                  {!! Form::label('nombre', 'Nombre') !!}
                  {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre SEO', 'id' => 'nombre'] ) !!}
               </div>

               <div class="form-group">
                  {!! Form::label('nombre_seo', 'Nombre SEO') !!}
                  {!! Form::text('nombre_seo', null, ['class' => 'form-control', 'placeholder' => 'Nombre SEO', 'id' => 'nombre_seo'] ) !!}
               </div>

               <div class="form-group">
                  {!! Form::label('descripcion', 'Descripcion') !!}
                  {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Descripcion', 'rows' => '5', 'id' => 'descripcion'] ) !!}
               </div>

               <div class="form-group">
                  {!! Form::label('direccion', 'Dirección') !!}
                  {!! Form::textarea('direccion', null, ['class' => 'form-control', 'placeholder' => 'Dirección', 'rows' => '5', 'id' => 'direccion'] ) !!}
               </div>

               <div class="form-group">
                  {!! Form::label('codigo_postal', 'Código Postal') !!}
                  {!! Form::text('codigo_postal', null, ['class' => 'form-control', 'placeholder' => 'Código Postal', 'id' => 'codigo_postal'] ) !!}
               </div>
   
               <div class="form-group">
                  <select name="pais_id" class="form-control" id='pais_id'>
                     @foreach ($paises as $pais )
                        <option value="{{ $pais->id }}">{{ $pais->pais }}</option>
                     @endforeach
                  </select>
               </div>

               <div class="form-group">
                  <select name="provincia_region_id" class="form-control" id="provincia_id">
                     @foreach ($provincias as $provincia )
                        <option value="{{ $provincia->id }}">{{ $provincia->provincia }}</option>
                     @endforeach
                  </select>
               </div>
   
               <div class="form-group">
                  {!! Form::label('persona_contacto', 'Persona de Contacto') !!}
                  {!! Form::text('persona_contacto', null, ['class' => 'form-control', 'placeholder' => 'Persona de Contacto', 'id' => 'persona_contacto'] ) !!}
               </div>

               <div class="form-group">
                  {!! Form::label('telefono', 'Teléfono') !!}
                  {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Teléfono', 'id' => 'telefono'] ) !!}
               </div>

               <div class="form-group">
                  {!! Form::label('telefono_opcional', 'Teléfono') !!}
                  {!! Form::text('telefono_opcional', null, ['class' => 'form-control', 'placeholder' => 'Teléfono Opcional', 'id' => 'telefono_opcional'] ) !!}
               </div>

               <div class="form-group">
                  {!! Form::label('email', 'Correo Electrónico') !!}
                  {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Correo Electrónico', 'id' => 'email'] ) !!}
               </div>

               <div class="form-group">
                  {!! Form::label('website', 'Website') !!}
                  {!! Form::url('website', null, ['class' => 'form-control', 'placeholder' => 'Website', 'id' => 'website'] ) !!}
               </div>

               <div class="form-group">
                  {!! Form::label('facebook', 'Facebook') !!}
                  {!! Form::url('facebook', null, ['class' => 'form-control', 'placeholder' => 'Facebook', 'id' => 'facebook'] ) !!}
               </div>

               <div class="form-group">
                  {!! Form::label('twitter', 'Twitter') !!}
                  {!! Form::text('twitter', null, ['class' => 'form-control', 'placeholder' => 'Twitter', 'id' => 'twitter'] ) !!}
               </div>

               <div class="form-group">
                  {!! Form::label('instagram', 'Instagram') !!}
                  {!! Form::text('instagram', null, ['class' => 'form-control', 'placeholder' => 'Instagram', 'id' => 'instagram'] ) !!}
               </div>

               <div class="form-group">
                  {!! Form::label('latitud', 'Latitud') !!}
                  {!! Form::text('latitud', null, ['class' => 'form-control', 'placeholder' => 'Latitud', 'id' => 'latitud'] ) !!}
               </div>

               <div class="form-group">
                  {!! Form::label('longitud', 'Longitud') !!}
                  {!! Form::text('longitud', null, ['class' => 'form-control', 'placeholder' => 'Longitud', 'id' => 'longitud'] ) !!}
               </div>

               <div class="form-group">
                  {!! Form::label('tipo_suscripcion', 'Tipo de Suscripción') !!}
                  {!! Form::text('tipo_suscripcion', null, ['class' => 'form-control', 'placeholder' => 'Tipo de Suscripción', 'id' => 'tipo_suscripcion'] ) !!}
               </div>

          {!! Form::close() !!}
      </div>
      <div class="modal-footer">
      <!--{!!link_to('#', $title='Actualizar', $attributes = ['id'=>'actualizar', 'class'=>'btn btn-primary'], $secure = null)!!}-->
      <button class="btn btn-primary" onClick="actualizar();">Actualizar</button>
      </div>
    </div>
  </div>
</div>