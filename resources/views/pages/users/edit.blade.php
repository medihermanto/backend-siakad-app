@extends('layouts.app')

@section('title', 'New User')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>New User</h1>
            </div>

            <div class="section-body">

                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <form action="{{ route('user.update', $user->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-header">
                                    <h4>Add New User</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text"
                                            class="form-control @error('name') is-invalid
                                        @enderror"
                                            value="{{ $user->name }}" name="name" required="">
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email"
                                            class="form-control @error('email') is-invalid
                                        @enderror"
                                            value="{{ $user->email }}" name="email" required="">
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text"
                                            class="form-control @error('phone') is-invalid
                                        @enderror"
                                            value="{{ $user->phone }}" name="phone">
                                        @error('phone')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Roles</label>
                                        <div class="selectgroup w-100">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="roles" value="admin"
                                                    class="selectgroup-input"
                                                    {{ $user->roles == 'admin' ? 'checked' : '' }}>
                                                <span class="selectgroup-button">Admin</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="roles" value="dosen"
                                                    class="selectgroup-input"
                                                    {{ $user->roles == 'dosen' ? 'checked' : '' }}>
                                                <span class="selectgroup-button">Dosen</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="roles" value="mahasiswa"
                                                    class="selectgroup-input"
                                                    {{ $user->roles == 'mahasiswa' ? 'checked' : '' }}>
                                                <span class="selectgroup-button">Mahasiswa</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <label>Address</label>
                                        <textarea class="form-control @error('address') is-invalid
                                        @enderror"
                                            data-height="150" name="address" required=""> {{ $user->address }}</textarea>
                                        @error('address')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
