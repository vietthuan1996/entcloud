@extends('layout.admin')
@section('content')
<div class="col-md-12">
    <div class="card">
        <form method="get" action="/" class="form-horizontal" id="createValidation">
            <div class="card-header card-header-text" data-background-color="rose">
                <h4 class="card-title">Thông tin công ty</h4>
            </div>
            <div class="card-content">
                {{--  Company_name --}}
                <div class="row">
                    <label class="col-sm-2 label-on-left">Tên công ty</label>
                    <div class="col-sm-10">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label"></label>
                            <input required type="text" name="company_name" class="form-control">
                        </div>
                    </div>
                </div>
                {{--  /Company_name     --}}

                {{--  Address  --}}
                <div class="row">
                    <label class="col-sm-2 label-on-left">Địa chỉ</label>
                    <div class="col-sm-10">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label"></label>
                            <input required type="text" name="address" class="form-control">
                        </div>
                    </div>
                </div>
                {{--  /Address  --}}
                {{--  Hotline  --}}
                <div class="row">
                    <label class="col-sm-2 label-on-left">Hotline/Phone</label>
                    <div class="col-sm-10">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label"></label>
                            <input required type="text" name="phone" class="form-control">
                        </div>
                    </div>
                </div>
                {{--  /Hotline  --}}
                {{--  Email  --}}
                <div class="row">
                    <label class="col-sm-2 label-on-left">Email</label>
                    <div class="col-sm-10">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label"></label>
                            <input required type="email" name="email" class="form-control">
                        </div>
                    </div>
                </div>
                {{--  Email  --}}
                {{--  Giới thiệu  --}}
                <div class="row">
                    <label class="col-sm-2 label-on-left">Giới thiệu</label>
                    <div class="col-sm-10">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label"></label>
                            <textarea required class="form-control" name="describe" rows="10"></textarea>
                        </div>
                    </div>
                </div>
                {{--  Giới thiệu  --}}

                <div class="col-xs-12 text-right">
                    <button type="submit" class="btn btn-success">Cập nhật</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    function setFormValidation(id) {
        $(id).validate({
            errorPlacement: function(error, element) {
                $(element).closest('div').addClass('has-error');
            }
        });
    }

    $(document).ready(function() {
        setFormValidation('#createValidation');
    });
</script>
@endsection