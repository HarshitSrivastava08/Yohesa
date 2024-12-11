@include('admin_body.admin_head.header')
@include('admin_body.admin_head.sidebar')



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Create Sub Category</h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Create Sub category</li>
        </ol>
    </section>


    <!-- Main content -->
    <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <div class="box-body">
                <div class="contaienr">
                    @if (session('success'))
                    <p>{{ session('success') }}</p>
                    @endif

                    <form action="/sub_categories" method="POST">
                        @csrf

                        <label for="category">Category:</label>
                        <select name="category" id="category" onchange="this.form.submit()">
                            <option value="">Select Category</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">
                                
                                {{ $category->category_name }}
                            </option>
                            @endforeach
                        </select>
                        <br>

                        @if (old('category'))
                        <label for="subcategory">Subcategory:</label>
                        <select name="subcategory" id="subcategory">
                            <option value="">Select Subcategory</option>
                            @foreach ($categories->find(old('category'))->subcategories as $subcategory)
                            <option value="{{ $subcategory->id }}"
                                {{ old('subcategory') == $subcategory->id ? 'selected' : '' }}>
                                {{ $subcategory->category_name }}
                            </option>
                            @endforeach
                        </select>
                        @endif
                        <br>

                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@include('admin_body.admin_head.footer')