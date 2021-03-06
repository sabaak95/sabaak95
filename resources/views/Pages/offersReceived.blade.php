@extends('layouts.app')
@push('head')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endpush


@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" >{{ __('اطلاعات درسهای درخواست داده شده  ') }}</div>
                    <div class="card-body" style="direction:rtl">
                        <table  border="1" class="table">
                            <tr>
                                <th>شناسه پیشنهاد</th>
                                <th>نمره</th>
                                <th>مشاهده پیشنهادات دانشجویان</th>
                            </tr>
                            @foreach($req['offers'] as $re)
                                <tr>
                                    <td>
                                        {{$re['id']}}
                                    </td>
                                    <td>
                                        {{$re['grade']}}
                                    </td>
                                    <td>
                                        {{$re['user']['name']}}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
@endpush
