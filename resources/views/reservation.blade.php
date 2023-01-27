@extends('master')

@section('content')
<section class="py-5">
    <div class="container py-5">
        <h1 class=" text-center display-4">Reservation </h1>
    </div>
</section>

<section class="">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <form action="">
                    <div class="form-group">
                        <label>Type</label>
                        <select name="" id="" class="form-control">
                            <option value="2">Evenement</option>
                            <option value="3">Conference</option>
                            <option value="4">Manifistation</option>
                        </select>
                    </div>
                    {{-- <div class="form-group">
                        <label>Reservations</label>
                        <select name="" id="" class="form-control">
                            <option value="1">1</option>
                        </select>
                    </div> --}}
                    @foreach ([1, 2, 3, 4] as $item)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                            Default checkbox
                            </label>
                        </div>
                        
                    @endforeach
                    <div class="form-group">
                        <button class="btn btn-primary w-100">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection