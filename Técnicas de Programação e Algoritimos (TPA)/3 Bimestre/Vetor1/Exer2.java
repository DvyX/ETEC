import java.util.Scanner;
public class Exer2 {
	
	public static void main(String[]args) {
		Scanner in = new Scanner(System.in);
		String v[] = new String[7];
		for(int i=0;i<7;i++) {
			System.out.println("Digite o "+(i+1)+" dia da semana");
			v[i] = in.next();
		}
		System.out.print("[");
		for(int c=0;c<7;c++) {
			if (c==6) {
				System.out.print(v[c]+"]");
			}else {
				System.out.print(v[c]+" - ");
			}
		}
	}

}