<!doctype>
<html>
   <head>
       <title>Mailchimp integration</title>
   </head>
   <body>
     <h1> Profile update</h1>
     {!! Form::open() !!}
       <div>
           Form::label('notify', 'Want email Notifications ?');
           Form::checkbox('notify', null, null, ['id'=>'notify']);

       </div>
     {!! Form::close() !!}
   </body>
</html>