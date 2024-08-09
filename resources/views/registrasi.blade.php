@extends('layouts.app')

@section('title', 'Registrasi - Explore Thailand by detikTravel')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/registrasi.css') }}">
@endpush

@section('content')
    <!-- Registration Form -->
    <section class="form-section py-5">
        <h2 class="text-center">Registrasi</h2>
        <p class="text-center">Lengkapi data diri kamu dengan benar</p>
        
        <form>
            <div class="form-group">
                <input type="text" class="form-control" id="fullName" placeholder="Nama Lengkap" required>
            </div>

            <div class="form-group">
                <input type="email" class="form-control" id="email" placeholder="Email" required>
            </div>

            <div class="form-group">
                <input type="tel" class="form-control" id="phoneNumber" placeholder="Nomor Telepon" pattern="[0-9]*" required>
                <small class="form-text text-muted">Masukkan nomor telepon aktif</small>
            </div>

            <div class="form-group">
                <textarea class="form-control" id="reason" rows="3" placeholder="Alasan Ingin Mengikuti Program" required></textarea>
            </div>

            <div class="form-group">
                <label for="photo">Unggah Foto</label>
                <input type="file" class="form-control-file" id="photo" accept="image/*" onchange="previewPhoto(this)" required>
                <img id="photoPreview" class="img-thumbnail mt-3" style="display: none;">
            </div>

            <button type="submit" class="btn btn-primary btn-block" onclick="event.preventDefault(); $('#successModal').modal('show');">Daftar</button>
        </form>
    </section>

    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Pendaftaran Berhasil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Terima kasih telah mendaftar. Kami akan segera menghubungi Anda.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    function previewPhoto(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('photoPreview').src = e.target.result;
                document.getElementById('photoPreview').style.display = 'block';
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endpush
