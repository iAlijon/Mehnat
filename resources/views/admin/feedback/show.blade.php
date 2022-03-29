@extends('layouts.admin')

@section('content')
<h2>Настройки #{{ $model->id }}</h2>
<hr>
<div class="clearfix">
    <div class="pull-left">
        <div class="btn-group group-control">
          <a href="{{ route('admin.options.index') }}" class="btn btn-default">{{__('main.List')}}</a>
          <a href="{{ route('admin.options.edit', ['id' => $model->id]) }}" class="btn btn-default">{{__('main.Edit')}}</a>
          <a href="{{ route('admin.options.create') }}" class="btn btn-default">{{__('main.add_new')}}</a>
        </div>
    </div>
    <div class="pull-right">
    <div class="btn-group group-control">
      <?php foreach ($languages as $lang => $locale): ?>
        <a href="?lang={{$lang}}" class="btn btn-default btn-sm {{ $locale['active']?'active':'' }}">{{ $locale['name'] }}</a>
      <?php endforeach ?>
    </div>
  </div>
</div>
<br>
<table class="table table-bordered table-striped table-condensed">
  <tbody>
      <tr>
          <th scope="row">Id</th>
          <td>{{ $model->id }}</td>
      </tr>
      <tr>
          <th scope="row">Title</th>
          <td>{{ $model->title }}</td>
      </tr>
      <tr>
          <th scope="row">Status</th>
          <td>{{ $model->status_display }}</td>
      </tr>
      <tr>
          <th scope="row">Translations</th>
          <td>
              <table class="table table-condensed">
              <?php foreach ($model->langsCheck as $lang => $locale): ?>
                <?php if (isset($locale['exists'])): ?>
                  <tr class="success">
                    <td>
                      {{$locale['name']}}
                    </td>
                    <td>
                      <form action="{{route('admin.options.destroyTranslate',['id' => $model->id, 'lang' => $lang])}}" method="post">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <input name="lang" type="hidden" value="{{$lang}}">
                        <button class="btn btn-danger btn-xs" onclick="if (confirm('Вы уверены, что хотите удалить?')) { return true } event.returnValue = false; return false;">Удалить перевод</button>
                      </form>
                    </td>
                  </tr>
                <?php else: ?>
                  <tr>
                    <td>
                      {{$locale['name']}}
                    </td>
                    <td>
                      <a href="{{route('admin.options.edit',['id' => $model->id, 'lang' => $lang])}}" class="btn btn-primary btn-xs">Добавить перевод</a>
                    </td>
                  </tr>
                <?php endif ?>
              <?php endforeach ?>
              </table>
          </td>
      </tr>
      <tr>
          <th scope="row">Created</th>
          <td>{{ $model->created_at }}</td>
      </tr>
      <tr>
          <th scope="row">Modified</th>
          <td>{{ $model->updated_at }}</td>
      </tr>
  </tbody>
</table>
<h3>Content</h3>
<div class="content">
  <?= $model->content ?>
</div>
<hr>
<div class="clearfix">
  <div class="pull-left">
    
  </div>
</div>
@endsection
