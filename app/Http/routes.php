<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//*** Welcome

$app->get('/', ['as'   => 'home', function() use ($app)
{
    $params = array(
      'posts_per_page' => 12
    );

    $data['posts'] = (new WP_Query($params))->get_posts();

    return view('home', $data);
}]);

$app->get('/about-us', ['as'   => 'about', function() use ($app)
{
    return view('about');
}]);

$app->get('/work', ['as'   => 'work', function() use ($app)
{
    return view('work');
}]);

$app->get('/services', ['as'   => 'services', function() use ($app)
{
    return view('services');
}]);

$app->get('/contact', ['as'   => 'contact', function() use ($app)
{
    return view('contact');
}]);

$app->get('/careers', ['as'   => 'careers', function() use ($app)
{
    return view('careers');
}]);


$app->get('/careers-app', ['as'   => 'careers-app', function() use ($app)
{
    return view('careers-app');
}]);

//*** End Welcome

$app->post('send-contact', function () use ($app) {

  // if($app->request->Ajax()){

    $response = ['status' => 'error'];
    $response['message'] = 'No ha sido posible enviar tu mensaje, por favor intente de nuevo más tarde';

    $this->validate($app->request, [
        'name'       => 'required',
        'email'      => 'required|email',
        'message'    => 'required',
    ]);

    $data['name'] = $app->request->input('name');
    $data['email'] = $app->request->input('email');
    $data['message'] = $app->request->input('message');
    $data['subject'] = 'TheNeumans.agency Web Contact | '.$data['email'];

    $data['message'] = '
DATOS DE CONTACTO

Nombre:
'.$data['name'].'

Email:
'.$data['email'].'

Mensaje:
'.$data['message'].'
    ';

    $mail = Mail::raw($data['message'], function ($message) use ($data) {
      $message->subject($data['subject']);
      $message->to(env('MAIL_TO'));
      $message->replyTo($data['email'], $data['name']);
    });

    if ($mail) {
        $response = ['status' => 'ok'];
        $response['message'] = '¡Gracias! Tu mensaje ha sido enviado correctamente.';
        return redirect()->route('contact')->with('success', $response['message']);
    }

    return redirect()->route('contact')->withErrors($response['message']);
  // }

});

$app->post('send-brief', function () use ($app) {

  // if($app->request->Ajax()){

    $response = ['status' => 'error'];
    $response['message'] = 'No ha sido posible enviar tu mensaje, por favor intente de nuevo más tarde';

    $this->validate($app->request, [
        'name'       => 'required',
        'email'      => 'required|email',
        'company'    => 'required'
    ]);

    $data['name'] = $app->request->input('name');
    $data['email'] = $app->request->input('email');
    $data['company'] = $app->request->input('company');
    $data['title'] = $app->request->input('title');
    $data['location'] = $app->request->input('location');
    $data['describe'] = $app->request->input('describe');
    $data['dimension'] = $app->request->input('dimension');
    $data['services']['innovate'] = $app->request->input('innovate', []);
    $data['services']['design'] = $app->request->input('design', []);
    $data['services']['change'] = $app->request->input('change', []);
    $data['detail'] = $app->request->input('detail');
    $data['budget'] = $app->request->input('budget');
    $data['date'] = $app->request->input('date');
    $data['references'] = $app->request->input('references');
    $data['message'] = 'TheNeumans.agency Online Brief';
    $data['subject'] = $data['message'].' | '.$data['email'];

    $data['message'] = '
ONLINE BRIEF

Name:
'.$data['name'].'

Email:
'.$data['email'].'

Company:
'.$data['company'].'

Title:
'.$data['title'].'

Location:
'.$data['location'].'

What you need:
'.$data['describe'].'

Dimension it:
'.$data['dimension'].'

Associated Services:
    ';

$data['message'] .= '

Innovate:
    ';

foreach($data['services']['innovate'] as $service) {
    $data['message'] .= '
• '.$service;
}

$data['message'] .= '

Design:
    ';

foreach($data['services']['design'] as $service) {
    $data['message'] .= '
• '.$service;
}

$data['message'] .= '

Change:
    ';

foreach($data['services']['change'] as $service) {
    $data['message'] .= '
• '.$service;
}

    $data['message'] .= '

Detailed Services:
'.$data['detail'].'

Budget:
'.$data['budget'].'

Deadline:
'.$data['date'].'

References:
'.$data['references'].'
    ';

dd($data);
    $mail = Mail::raw($data['message'], function ($message) use ($data) {
      $message->subject($data['subject']);
      $message->to(env('MAIL_TO'));
      $message->replyTo($data['email'], $data['name']);
    });

    if ($mail) {
        $response = ['status' => 'ok'];
        $response['message'] = '¡Gracias! Tu mensaje ha sido enviado correctamente.';
        return redirect()->route('works')->with('success', $response['message']);
    }

    return redirect()->route('works')->withErrors($response['message']);
  // }

});

$app->post('send-app', function () use ($app) {

  // if($app->request->Ajax()){

    $response = ['status' => 'error'];
    $response['message'] = 'No ha sido posible enviar tu mensaje, por favor intente de nuevo más tarde';

    $this->validate($app->request, [
        'name'       => 'required',
        'lastName'   => 'required',
        'email'      => 'required|email',
    ]);

    $data['opening'] = $app->request->input('opening','N/A');
    $data['name'] = $app->request->input('name');
    $data['lastName'] = $app->request->input('lastName');
    $data['email'] = $app->request->input('email');
    $data['tel'] = $app->request->input('tel');
    $data['exp'] = $app->request->input('exp');
    $data['education'] = $app->request->input('education');
    $data['something'] = $app->request->input('something');
    $data['links'] = $app->request->input('links');
    $data['message'] = 'TheNeumans.agency Online Application';
    $data['subject'] = $data['message'].' | '.$data['email'];

    $data['message'] = '
ONLINE APPLICATION

Opening:
'.$data['opening'].'

Name:
'.$data['name'].' '.$data['lastName'].'

Email:
'.$data['email'].'

Phone Number:
'.$data['tel'].'

Experience:
'.$data['exp'].'

Education:
'.$data['education'].'

Something about myself:
'.$data['something'].'

Links:
'.$data['links'].'
    ';

    $mail = Mail::raw($data['message'], function ($message) use ($data) {
      $message->subject($data['subject']);
      $message->to(env('MAIL_TO'));
      $message->replyTo($data['email'], $data['name']);
    });

    if ($mail) {
        $response = ['status' => 'ok'];
        $response['message'] = '¡Gracias! Tu mensaje ha sido enviado correctamente.';
        return redirect()->route('careers-app')->with('success', $response['message']);
    }

    return redirect()->route('careers-app')->withErrors($response['message']);
  // }

});
