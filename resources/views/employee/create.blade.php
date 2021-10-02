    {{-- Forma oynasi create--}}
    <button type="button" class="btn btn-success pull-right" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add New Employee</button>
    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Employee</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('employee.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{-- 1 qator --}}
                        <div class="row g-3">
                            <div class="col">
                                <label for="neme" class="col-form-label">Full name</label>
                                <input type="text"  name="full_name" class="form-control" id="name" value="{{ old('name') }}">
                            </div>
                            <div class="col">
                                <label for="email" class="col-form-label">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                            </div>
                            <div class="col">
                                <label for="tell" class="col-form-label">Tell number (+998)</label>
                                <input type="number" name="tell" class="form-control" max="999999999" min="330000000" value="{{ old('tell') }}">
                            </div>
                        </div>
                        {{-- 2 qator --}}
                        <div class="row g-3">
                            <div class="col">
                                <label for="address" class="col-form-label">Address</label>
                                <input type="text"  name="address" class="form-control" value="{{ old('address') }}">
                            </div>
                            <div class="col">
                                <label for="category" class="col-form-label">Category</label>
                                <input type="text" name="category" class="form-control"  value="{{ old('category') }}">
                            </div>
                            <div class="col">
                                <label for="degree" class="col-form-label">Degree</label>
                                <select name="degree" id="inputState" class="form-control" value="{{ old('degree') }}">
                                    <option value="0" selected>0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                        {{-- 3 qator --}}
                        <div class="row g-3">
                            <div class="col">
                                <label for="pasport_seriya" class="col-form-label">Paspord seriya</label>
                                <input type="text" name="pasport_seriya" class="form-control" maxlength="9" minlength="9" value="{{ old('pasport_seriya') }}">
                            </div>
                            <div class="col">
                                <label for="pasport_photo" class="col-form-label">Pasport photo</label>
                                <input class="form-control" name="pasport_photo" type="file" id="formFile">
                            </div>
                            
                        </div>
                        {{-- 6 qator --}}
                        <div class="mb-3">
                            <label for="description" class="col-form-label">Description</label>
                            <textarea class="form-control" name="description" id="message-text"></textarea value="{{ old('description') }}" >
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
{{-- end forma oynasi  create--}}
