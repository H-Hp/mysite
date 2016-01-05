//package app.utils;
package packageTest.utils;
import java.io.*;

public class FileReader {
    public static void readFile(String path) {
        try {
            BufferedReader br = new BufferedReader(new java.io.FileReader(path));
            String line;
            while ((line = br.readLine()) != null) {
                System.out.println(line);
            }
            br.close();
        } catch (IOException e) {
            System.out.println("ファイル読み込みエラー: " + e.getMessage());
        }
    }
}
