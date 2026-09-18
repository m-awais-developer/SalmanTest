```blade
@extends('master.admin')

@section('title','Add blog')

@section('content')

<div class="container-fluid py-4"
     style="background-color: #f8fafc; min-height: 100vh; font-family: 'Segoe UI', Roboto, sans-serif;">

    <div class="row justify-content-center">

        <div class="col-12 col-lg-9 col-xl-8">

            <div class="mb-4 text-start"
                 style="transform: translateY(40px);">
            </div>


            <div class="card border-0 shadow-sm"
                 style="border-radius: 16px; background: #ffffff;">

                <div class="card-body p-4 p-md-5">


                    {{-- ================= HEADING ================= --}}

                    <h4 class="fw-bold mb-1"
                        style="color: #1e293b; letter-spacing: -0.5px;">

                        <i class="fa-solid fa-folder-plus me-2 text-primary"></i>

                        Add Blog

                    </h4>


                    <p class="text-muted mb-4 small">
                        Add a new blog post with custom fields.
                    </p>


                    @include('partials.alerts')


                    {{-- ================= BLOG FORM ================= --}}

                    <form
                        action="{{ route('admin.blogs.store') }}"
                        method="POST"
                        enctype="multipart/form-data">

                        @csrf


                        <table class="table align-middle border-0"
                               style="border-collapse: separate; border-spacing: 0 15px;">

                            <tbody>


                                {{-- ==================================================
                                     TITLE
                                =================================================== --}}

                                <tr>

                                    <th class="border-0 bg-light text-secondary fw-semibold ps-4"
                                        style="width: 25%;
                                               border-radius: 10px 0 0 10px;
                                               font-size: 0.95rem;">

                                        Title

                                    </th>


                                    <td class="border-0 pe-4"
                                        style="background-color: #ffffff;">

                                        <input
                                            type="text"
                                            name="title"
                                            value="{{ old('title') }}"
                                            class="form-control"
                                            placeholder="Enter blog title"
                                            style="padding: 12px;
                                                   border: 1px solid #cbd5e1;
                                                   border-radius: 8px;
                                                   font-size: 0.95rem;"
                                            required>

                                        @error('title')
                                            <small class="text-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror

                                    </td>

                                </tr>


                                {{-- ==================================================
                                     IMAGE
                                =================================================== --}}

                                <tr>

                                    <th class="border-0 bg-light text-secondary fw-semibold ps-4"
                                        style="border-radius: 10px 0 0 10px;
                                               font-size: 0.95rem;">

                                        Image

                                    </th>


                                    <td class="border-0 pe-4"
                                        style="background-color: #ffffff;">

                                        <input
                                            type="file"
                                            name="image"
                                            class="form-control"
                                            accept="image/jpeg,image/png,image/jpg,image/webp"
                                            style="padding: 10px;
                                                   border: 1px solid #cbd5e1;
                                                   border-radius: 8px;
                                                   font-size: 0.95rem;"
                                            required>

                                        <small class="text-muted">
                                            JPG, JPEG, PNG or WEBP. Maximum 2MB.
                                        </small>


                                        @error('image')
                                            <small class="text-danger d-block">
                                                {{ $message }}
                                            </small>
                                        @enderror

                                    </td>

                                </tr>


                                {{-- ==================================================
                                     DESCRIPTION
                                =================================================== --}}

                                <tr>

                                    <th class="border-0 bg-light text-secondary fw-semibold ps-4"
                                        style="border-radius: 10px 0 0 10px;
                                               font-size: 0.95rem;">

                                        Description

                                    </th>


                                    <td class="border-0 pe-4"
                                        style="background-color: #ffffff;">

                                        <textarea
                                            name="description"
                                            class="form-control"
                                            rows="6"
                                            placeholder="Enter blog description..."
                                            style="padding: 12px;
                                                   border: 1px solid #cbd5e1;
                                                   border-radius: 8px;
                                                   font-size: 0.95rem;
                                                   line-height: 1.6;"
                                            required>{{ old('description') }}</textarea>


                                        @error('description')
                                            <small class="text-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror

                                    </td>

                                </tr>


                                {{-- ==================================================
                                     TAGLINE
                                =================================================== --}}

                                <tr>

                                    <th class="border-0 bg-light text-secondary fw-semibold ps-4"
                                        style="border-radius: 10px 0 0 10px;
                                               font-size: 0.95rem;">

                                        Tagline

                                    </th>


                                    <td class="border-0 pe-4"
                                        style="background-color: #ffffff;">

                                        <input
                                            type="text"
                                            name="tagline"
                                            value="{{ old('tagline') }}"
                                            class="form-control"
                                            placeholder="Enter a short blog tagline"
                                            style="padding: 12px;
                                                   border: 1px solid #cbd5e1;
                                                   border-radius: 8px;
                                                   font-size: 0.95rem;">

                                        <small class="text-muted">
                                            Add a short line or subtitle for your blog.
                                        </small>


                                        @error('tagline')
                                            <small class="text-danger d-block">
                                                {{ $message }}
                                            </small>
                                        @enderror

                                    </td>

                                </tr>


                                {{-- ==================================================
                                     FULL DETAIL
                                =================================================== --}}

                                <tr>

                                    <th class="border-0 bg-light text-secondary fw-semibold ps-4"
                                        style="border-radius: 10px 0 0 10px;
                                               font-size: 0.95rem;">

                                        Full Detail

                                    </th>


                                    <td class="border-0 pe-4"
                                        style="background-color: #ffffff;">

                                        <textarea
                                            name="detail"
                                            class="form-control"
                                            rows="10"
                                            placeholder="Enter complete blog detail..."
                                            style="padding: 12px;
                                                   border: 1px solid #cbd5e1;
                                                   border-radius: 8px;
                                                   font-size: 0.95rem;
                                                   line-height: 1.7;">{{ old('detail') }}</textarea>


                                        <small class="text-muted">
                                            Write the complete content that will appear on the Blog Detail page.
                                        </small>


                                        @error('detail')
                                            <small class="text-danger d-block">
                                                {{ $message }}
                                            </small>
                                        @enderror

                                    </td>

                                </tr>


                                {{-- ==================================================
                                     SUBMIT
                                =================================================== --}}

                                <tr>

                                    <td colspan="2"
                                        class="text-end border-0 pt-3">

                                        <button
                                            type="submit"
                                            class="btn text-white px-5 py-2 fw-bold shadow-sm border-0"
                                            style="background: linear-gradient(135deg, #6c5ce7, #5b4bc4);
                                                   border-radius: 8px;
                                                   font-size: 0.95rem;
                                                   transition: all 0.2s;">

                                            <i class="fa-solid fa-floppy-disk me-2"></i>

                                            Save Blog

                                        </button>

                                    </td>

                                </tr>


                            </tbody>

                        </table>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection

