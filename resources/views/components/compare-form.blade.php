
        <div class="col-md-4 compare-form my-3">
            <div class="card" style="height: 200px">
                <div class="card-body">
                    <div class="my-2">
                        <select class="form-select category" aria-label="select example" {{ $isMainCompare() ? '' : 'disabled' }}>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>           
                    </div>
                    <div class="my-2">
                        <select class="form-select sub-category" aria-label="select example" {{ $isMainCompare() ? '' : 'disabled' }}>
                            <option value="">-</option>
                        </select>           
                    </div>
                    <div class="my-2">
                        <select class="form-select variant" aria-label="select example" name="id[]">
                            <option value="">-</option>
                        </select>           
                    </div>
                </div>
            </div>
        </div>