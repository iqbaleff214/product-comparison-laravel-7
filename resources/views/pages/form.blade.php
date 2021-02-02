@extends('template.base')

@section('title', 'Comparison Form')

@section('content')
<form action="{{ route('comparison.post') }}" method="POST">
    @csrf
    <div class="row compare-container">
        <x-compare-form main="true" :categories="$categories" />
        <x-compare-form :categories="$categories" />
        <div class="col-md-4 my-3">
            <div class="card" style="height: 200px">
                <div class="card-body align-self-center">
                    <button class="btn align-middle compare-add" type="button">Tambah</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <a href="{{ route('products') }}" class="btn btn-secondary">Close</a>
            <button type="submit" class="btn btn-danger">Compare</button>
        </div>
    </div>
</form>
@endsection

@push('scripts')
    <script>
        const _addCompare = document.querySelector('.compare-add');
        const _container = document.querySelector('.compare-container');
        
        const getUrl = (endpoint) => `${location.protocol}//${location.host}/api/${endpoint}`;

        const getSubCategories = (id=1) => {
            fetch(getUrl(`categories/${id}`)).then(data => data.json()).then(data => {
                const _subCategoryAll = document.querySelectorAll('.sub-category');
                _subCategoryAll.forEach(element => {
                    element.innerHTML = generateOption(data);
                });
            });
        }

        const getProducts = (id) => {
            fetch(getUrl(`products/${id}`)).then(data => data.json()).then(data => {
                const _productAll = document.querySelectorAll('.variant');
                _productAll.forEach(element => {
                    element.innerHTML = generateOption(data);
                });
            });
        }

        const generateOption = (obj=null) => {
            let opt = `<option>-<option>`;
            if (Array.isArray(obj)) {
                opt = ``;
                obj.forEach(el => {
                    opt += `<option value="${el.id}">${el.title}</option>`;
                });
            }
            return opt;
        };

        document.addEventListener('change', function (e) {
            if (e.target.classList.contains('category')) {
                const _category = document.querySelector('.category');
                const _categoryAll = document.querySelectorAll('.category');
                const _productAll = document.querySelectorAll('.variant');
                const id = e.target.value;
                getSubCategories(id);
                _productAll.forEach(el => el.innerHTML = generateOption());
                _categoryAll.forEach(el => {
                    el.value = _category.value;
                    el.text = _category.text;
                });
            }
            if (e.target.classList.contains('sub-category')) {
                const _subCategoryAll = document.querySelectorAll('.sub-category');
                const id =e.target.value;
                _subCategoryAll.forEach(el => {
                    el.value = e.target.value;
                    el.text = e.target.text;
                })
                getProducts(id);
            }
        });

        _addCompare.addEventListener('click', e => {
            _container.lastElementChild.remove();
            const _form = _container.lastElementChild;
            _container.lastElementChild.insertAdjacentHTML("afterend", _form.outerHTML);

        });

        getSubCategories();
    </script>
@endpush