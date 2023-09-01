SELECT mhs_nama
FROM tb_mahasiswa m
JOIN tb_mahasiswa_nilai mn ON m.mhs_id = mn.mhs_id
JOIN tb_matakuliah mk ON mn.mk_id = mk.mk_id
WHERE mk.mk_kode = 'MK303'
ORDER BY mn.nilai DESC
LIMIT 1;