const CSVManager = {
    async fetchCSV(jenis) {
        const fileMap = {
            'guru': 'assets/csv/sektor.csv',
            'kelas': 'assets/csv/CLASS.csv',
            'ngabdi': 'assets/csv/pengabdian.csv',
            'konsulat': 'assets/csv/konsulat.csv',
            'panitiaenam': 'assets/csv/panitia6.csv',
            'jumlahpeserta': 'assets/csv/jumlahpeserta.csv',
            'panitiaguru': 'assets/csv/panitiaguru.csv',
            'walikelas': 'assets/csv/walikelas.csv'
        };

        const fileName = fileMap[jenis];
        if (!fileName) return [];

        try {
            const response = await fetch(fileName);
            if (!response.ok) throw new Error('File not found');
            const text = await response.text();
            return this.parseCSV(text);
        } catch (error) {
            console.error('Error loading CSV:', error);
            return [];
        }
    },

    parseCSV(text) {
        // Menggunakan semicolon (;) sebagai pemisah sesuai logika di ambil_csv.php
        const lines = text.split(/\r?\n/);
        return lines
            .filter(line => line.trim() !== "")
            .map(line => {
                // Sederhana split, jika ada quote kompleks mungkin butuh regex atau library
                // Tapi untuk data ini sepertinya cukup
                return line.split(';');
            });
    }
};
