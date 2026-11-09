1. Mengapa validasi dipindahkan dari controller ke Form Request?
Supaya controller lebih bersih dan hanya menerima data yang sudah lolos pemeriksaan. Aturan validasi juga terpisah antara store dan update, dan mudah dipakai ulang.

2. Mengapa unique rule pada update berbeda dari store?
Saat store, kode tidak boleh sama dengan kursus mana pun. Saat update, kode milik kursus yang sedang diedit tidak boleh dianggap duplikat, jadi dipakai Rule::unique(...)->ignore($course).

3. Apa fungsi @method('PUT') dan @method('DELETE')?
Browser hanya bisa mengirim form dengan GET atau POST. @method menambahkan field tersembunyi _method agar Laravel mengarahkan permintaan ke route PUT atau DELETE.