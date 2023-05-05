<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tampil Data karyawan</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  {{-- buat navigasi --}}
  <nav class="text-center mb-5">
    <button id="btn_tambah" class="bg-blue-700 h-12 w-28 rounded-full text-white uppercase font-bold" onclick="goToAdd()">Tambah</button>
    <button id="btn_refresh" class="bg-stone-200 h-12 w-28 rounded-full uppercase font-bold">Refresh</button>
  </nav>

  {{-- buat table --}}
  <table class="w-full">
    {{-- judul table --}}
    <thead>
      <tr class="h-12">
        <th class="border-solid border-2 border-green-500 bg-green-200 w-1/12">Aksi</th>
        <th class="border-solid border-2 border-green-500 bg-green-200 w-1/12">NIK</th>
        <th class="border-solid border-2 border-green-500 bg-green-200 w-2/12">Nama Karyawan</th>
        <th class="border-solid border-2 border-green-500 bg-green-200 w-3/12">Alamat </th>
        <th class="border-solid border-2 border-green-500 bg-green-200 w-1/12">Telepon</th>
        <th class="border-solid border-2 border-green-500 bg-green-200 w-2/12">Jabatan</th>
      </tr>
    </thead>

    {{-- isi table --}}
    <tbody>
      @foreach ($result->karyawan as $output)
        <tr>
          <td class="border-solid border-2 border-green-500 bg-transparent text-center px-2.5">
            <button id="btn_ubah" class="bg-amber-400 w-12 h-12 rounded-lg">
              <i class="fa-solid fa-pencil"></i>
            </button>
            <button id="btn_hapus" class="bg-red-600 text-white w-12 h-12 rounded-lg">
              <i class="fa-solid fa-trash"></i>
            </button>
          </td>
          <td class="border-solid border-2 border-green-500 bg-transparent text-center px-2.5">{{ $output->kode_karyawan }}</td>
          <td class="border-solid border-2 border-green-500 bg-transparent px-2.5">{{ $output->nama_karyawan }}</td>
          <td class="border-solid border-2 border-green-500 bg-transparent px-2.5">{{ $output->alamat_karyawan }}</td>
          <td class="border-solid border-2 border-green-500 bg-transparent text-center px-2.5">{{ $output->telepon_karyawan }}</td>
          <td class="border-solid border-2 border-green-500 bg-transparent px-2.5">{{ $output->jabatan_karyawan }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  {{-- Tailwind CDN --}}
  <script src="https://cdn.tailwindcss.com"></script>
  {{-- custom JS --}}
  <script>
    // buat fungsi untuk link tambah data
    const goToAdd = () => {
      location.href='{{ url("/add") }}';
    }

    // buat fungsi untuk refresh data
    const btnRefresh = document.querySelector('#btn_refresh');
    btnRefresh.addEventListener('click', () => {
      location.href='{{ url("") }}';
    });
  </script>
</body>
</html>