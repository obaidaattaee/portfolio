@extends(backpack_view('blank'))

@section("content")
<div class="card card-body">
	<h1>{{ __("base.settings")}}</h1>

	<center>
		<form action="{{ route('about.save') }}" method="post" enctype="multipart/form-data">
			@csrf
{{--{{ dd($settings) }}--}}
		<div class="col-sm-6" style="text-align: right;">
                <div class="card">
                  <div class="card-header">النبذة </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="company">العنوان</label>
                      <input class="form-control" id="company" name="title" type="text"  placeholder="Enter your company name" value="{{ old('title') ?? $about->title ?? "" }}">
                    </div>
                    <div class="form-group">
                      <label for="vat">الوصف</label>
                        <textarea class="form-control" id="vat" name="description" type="text" placeholder="description" >{{ old('description') ?? $about->description ?? "" }}</textarea>
                    </div>

                    <div class="form-group">
                    	<input type="submit" value="save" class="btn btn-success">
                    </div>
                    <!-- /.row-->

                  </div>
                </div>
              </div>
			</form>
	</center>
</div>




@endsection

@section('after_scripts')
    @if ($errors->any())

        <script>
            @foreach ($errors->all() as $error)
            new Noty({
                text: "<strong>{{ $error }}</strong>",
                type: "danger"
            }).show();
            @endforeach
        </script>
    @endif

@endsection
