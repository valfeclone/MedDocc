<div class="dashboard">
    <h1 class="heading-1 margin-bottom-xl">Dashboard Admin - Dokter</h1>

    <div class="tab">
        <a href="/admin/doctor" class="tab-link active">Semua Dokter</a>
        <a href="/admin/doctor/verified" class="tab-link">Dokter Diizinkan Praktik</a>
        <a href="/admin/doctor/unverified" class="tab-link">Dokter Tidak Diizinkan Praktik</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Dokter</th>
                <th scope="col">File Izin Praktik</th>
                <th scope="col">Status Praktik</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($all_doc as $all_doc)
            <tr>
                <td>{{$all_doc->id}}</td>
                <td>{{$all_doc->name}}</td>
                <td>
                    @if ($all_doc->path_pract_permit)
                        <a href="/storage/bukti-praktik/{{$all_doc->path_pract_permit}}">Click to view</a>
                    @else
                        Belum ada izin praktik
                    @endif
                </td>
                <td>
                @if ($all_doc->path_pract_permit)
                    @if ($all_doc->status_pract_permit == true)
                        Praktik Diizinkan
                    @else
                        Praktik Belum Diizinkan
                    @endif
                @endif
                <td>{{$all_doc->email}}</td>
                <td>
                    <form method="POST" action="/admin/doctor/alter/{{$all_doc->id}}" class="fa fa-16px">
                        @csrf
                        <button title="ubah izin dokter" type="submit"><i class="fa fa-16px fa-check text-green-500 mr-3" ></i></button>
                    </form> 
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- dibawah ini alert buat response hasil. kalo susah ngeditnya dicomment aja. dites dulu hasilnya apa kalo pencet button ubah status izin dokter -->
    @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
    @endif
    @if (\Session::has('error'))
    <div class="alert alert-error">
        <ul>
            <li>{!! \Session::get('error') !!}</li>
        </ul>
    </div>
    @endif
</div>