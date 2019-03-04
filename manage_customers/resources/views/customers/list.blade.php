@extends('home')
@section('title', 'Danh sách khách hàng')
@section('content')
<div class="row">
    <div class="col-12 mt-4  text-center"><h1>@lang('language.list_customers')</h1></div>
    <div class="btn-group dropright mb-3">
        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Language
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class=" " href="{!! route('change-language', ['en']) !!}">English</a>
            <a class="" href="{!! route('change-language', ['vi']) !!}">Tiếng Việt</a>
        </div>
    </div>
    <div class="col-12">
        @if (Session::has('success'))
            <p class="text-success">
                <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
            </p>
        @endif
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">@lang('language.name_customer')</th>
            <th scope="col">@lang('language.phone_number')</th>
            <th scope="col">@lang('language.email')</th>
            <th scope="col">@lang('language.address')</th>
            <th scope="col">@lang('language.show')</th>
            <th scope="col">@lang('language.edit')</th>
            <th scope="col">@lang('language.remove')</th>
        </tr>
        </thead>
        <tbody>
        @if(count($customers)==0)
            <tr>
                <td colspan="4">Không có dữ liệu</td>
            </tr>
        @else
                @foreach($customers as $key => $customer)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{$customer->address}}</td>
                        <td><a href="{{ route('customers.read', $customer->id) }}">@lang('language.show')</a></td>
                        <td><a href="{{ route('customers.edit', $customer->id) }}">@lang('language.edit')</a></td>
                        <td><a href="{{ route('customers.destroy', $customer->id) }}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">@lang('language.remove')</a></td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    <a class="btn btn-primary" href="{{ route('customers.create') }}">@lang('language.add_new')</a>

</div>
@endsection