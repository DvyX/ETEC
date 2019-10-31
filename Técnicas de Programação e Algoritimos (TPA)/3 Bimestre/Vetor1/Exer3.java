import java.util.Scanner;
public class Exer3 {
	public static void main (String[]args) {
		Scanner in=new Scanner(System.in);
		String v[] = new String[26];
		for(int i=0;i<26;i++) {
			System.out.println("Digite a "+(i+1)+" letra do alfabeto");
			v[i]=in.next();
		}
		System.out.print("[");
		for(int c=0;c<26;c++) {
		if(c==25) {
			System.out.print(v[c]+"]");
		}else {
			System.out.print(v[c]+" - ");
		}
		}
		
	}

}
