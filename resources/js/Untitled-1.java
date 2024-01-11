// Kelas abstrak
abstract class Hewan {
    public String nama;
    private int umur;

    // Konstruktor
    public Hewan(String nama, int umur) {
        this.nama = nama;
        this.umur = umur;
    }

    // Metode public
    public void tampilkanNama() {
        System.out.println("Nama Hewan: " + nama);
    }

    // Metode private
    private void tampilkanUmur() {
        System.out.println("Umur Hewan: " + umur);
    }

    // Metode public untuk mengakses metode private
    public void perlihatkanUmur() {
        tampilkanUmur();
    }

    // Metode abstrak
    public abstract void suara();
}

// Kelas turunan dari Hewan
class Kucing extends Hewan {

    public Kucing(String nama, int umur) {
        super(nama, umur);
    }

    // Implementasi metode abstrak dari kelas induk
    @Override
    public void suara() {
        System.out.println("Meong");
    }
}

public class Main {
    public static void main(String[] args) {
        Kucing kucingku = new Kucing("Momo", 5);

        kucingku.tampilkanNama();   // Mengakses metode public
        kucingku.perlihatkanUmur(); // Mengakses metode private melalui metode public
        kucingku.suara();           // Mengakses metode abstrak yang sudah diimplementasikan
    }
}
