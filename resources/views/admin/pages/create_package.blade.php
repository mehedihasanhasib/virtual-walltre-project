@extends('admin.admin_dashboard', ['create_package' => 'active'])
@section('content')
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Contact Information</strong>
        </div>
        <div class="card-body">
            <!-- Credit Card -->
            <div id="pay-invoice">
                <div class="card-body">
                    <form action="{{ route('store_package') }}" method="POST">
                        @csrf

                        {{-- package name --}}
                        <div class="form-group has-success">
                            <label for="package_name" class="control-label mb-1">Package Name</label>
                            <input id="package_name" name="package_name" type="text" class="form-control cc-name valid"
                                value="{{ old('package_name') }}">
                            <x-input-error :messages="$errors->get('package_name')" class="mt-2 text-danger" />
                        </div>

                        {{-- package price --}}
                        <div class="form-group">
                            <label for="package_price" class="control-label mb-1">Package Price</label>
                            <input id="package_price" name="package_price" type="number" class="form-control"
                                value="{{ old('package_price') }}">
                            <x-input-error :messages="$errors->get('package_price')" class="mt-2 text-danger" />

                        </div>

                        {{-- features --}}
                        <div class="form-group">
                            <label for="features" class="control-label mb-1">Features</label>
                            <button class="btn btn-sm btn-primary mb-2" id="add_more_feature">Add Feature</button>
                            <button class="btn btn-sm btn-danger mb-2" id="remove_feature">Remove Feature</button>
                            <div id="features-input">
                                <input id="features" name="features[]" type="text" class="form-control"
                                    value="{{ old('features') }}">
                            </div>
                            <x-input-error :messages="$errors->get('features')" class="mt-2 text-danger" />
                        </div>

                        <div>
                            <button type="submit" class="btn btn-lg btn-info btn-block">
                                <span>Submit</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div> <!-- .card -->
@endsection

@section('script')
    <script>
        let id = 0;
        document.getElementById("add_more_feature").addEventListener("click", function(event) {
            event.preventDefault();
            let input = document.createElement("input");
            input.classList.add('form-control');
            input.classList.add('mt-2');
            input.name = 'features[]';
            document.getElementById("features-input").appendChild(input);
        })

        document.getElementById("remove_feature").addEventListener("click", function(event) {
            event.preventDefault();

            const list = document.getElementById("features-input");
            list.removeChild(list.lastElementChild);

        })
    </script>
@endsection
