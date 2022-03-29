@extends('layouts.custom')

@section('content')
  <div class="container" style="margin: 20px auto">
    <div class="container" style="margin: 20px auto">
      <div style="padding : 20px; text-align: center">
        @if($lang == 'uzbText')
          <h1>Хусусий бандлик агентликлари реестри</h1>
        @elseif($lang == 'uzbKrText')
          <h1>Хусусий бандлик агентликлари реестри</h1>
        @elseif($lang == 'engText')
          <h1></h1>
        @else
          <h1>Реестр частных агентств занятости
          </h1>
        @endif
      </div>
      <table class="table table-bordered table-striped table-condensed">
        <thead>
        <tr>
          @foreach($result['result']['tableFields'] as $item)
            <td>{{$item['text'][$lang]}}</td>
          @endforeach
        </tr>
        </thead>
        <tbody>
        @foreach($result['result']['data'] as $item)
          <tr>
            <td>{{$item['tableColumn']['ID']['data']}}</td>
            <td>{{$item['tableColumn']['Korxonanomi']['text'][$lang]}}</td>
            <td>{{$item['tableColumn']['Telefonraqami']['data']}}</td>
            <td>{{$item['tableColumn']['Reestrraqami']['number']}}</td>
            <td>{{$item['tableColumn']['STIR']['number']}}</td>
            <td>{{$item['tableColumn']['Litsenziyaraqamivasanasi']['data']}}</td>
          </tr>
        @endforeach
        </tbody>
      </table>

    </div>
@endsection
