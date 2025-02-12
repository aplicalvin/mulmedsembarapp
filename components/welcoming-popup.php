<!-- Modal Popup -->
<div class="modal fade" id="welcomePopup" tabindex="-1" aria-labelledby="welcomePopupLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h5 class="modal-title fs-4 fw-bold" id="welcomePopupLabel">Horas!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Modal Body -->
      <div class="modal-body">
        <p class="p-0">
          Salam sejahtera untuk kita semua, <br />Selamat datang di
          website sistem informasi Multimedia HKBP Semarang Barat
          Ressort Semarang. Website ini dibuat untuk mempermudah
          pengaturan jadwal dan membantu persiapan ibadah untuk
          petugas Multimedia HKBP Semarang Barat Ressort Semarang.
        </p>
        <p class="p-0">
          Tim Multimedia HKBP Semarang Barat sendiri terdiri dari
          beberapa bagian seperti
        </p>
        <ul>
          <li>Operator Slider / LCD</li>
          <li>Operator Sound System / Soundman</li>
          <li>Operator Live Streaming</li>
          <li>Operator Kamera / Camera-Man</li>
          <li>Operator Lapangan (Teknisi Kabel)</li>
        </ul>
        <p class="p-0">
          Semoga dengan hadirnya website ini, dapat meningkatkan
          kualitas pelayanan multimedia di HKBP Semarang Barat Ressort
          Semarang.
        </p>
        <br />
      </div>
      
      <div class="text-end">
        <p class="m-0 p-0">Koordinator Multimedia</p>
        <p class="m-0 p-0">HKBP Semarang Barat Ressort Semarang</p>
        <p class="m-0 p-0">Periode 2024 - 2026</p>
        <br />
        <p class="m-0 p-0">Calvin Samuel Simbolon</p>
      </div>
      <!-- Modal Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>


<!-- SCRIPT -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    // Cek apakah popup sudah pernah ditampilkan
    if (!localStorage.getItem("popupShown")) {
      // Tampilkan modal popup
      const welcomePopup = new bootstrap.Modal(document.getElementById("welcomePopup"));
      welcomePopup.show();

      // Set status popup sudah ditampilkan
      localStorage.setItem("popupShown", true);
    }
  });
</script>
<!-- SCRIPT -->