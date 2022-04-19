<body>
    <div class="container mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-info">
                    Card Header
                </div>
                <div class="card-body">
                    <table>
                        <thead>
                            <tr>
                                <td>ID Dokter</td>
                                <td>Nama Dokter</td>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <select>
                                <?php foreach($datalist as $i):?>
                                    <option>
                                        <?= $i->namadokter;?>
                                    </option>
                                    <?php endforeach?>
                                </select>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>