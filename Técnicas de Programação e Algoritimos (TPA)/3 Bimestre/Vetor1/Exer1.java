import java.util.Scanner;
public class Exer1 {
	
	public static void main(String[]args) {
		Scanner in = new Scanner(System.in);
		String v[] = new String[12];
		for(int i=0;i<12;i++) {
			System.out.println("Digite o "+(i+1)+" mês do ano");
			v[i] = in.next();
		}
		System.out.print("[");
		for(int c=0;c<12;c++) {
			if(c==11) {
				System.out.print(v[c]+"]");
			}else {
				System.out.print(v[c]+" - ");
			}
		}
	}

}
