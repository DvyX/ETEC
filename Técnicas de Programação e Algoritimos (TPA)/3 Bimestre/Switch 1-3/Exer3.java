import java.util.Scanner;
public class Exer3 {
	public static void main (String [] args) {
		Scanner in = new Scanner (System.in);
		int d,m;
		System.out.println("Digite o m�s:");
		m=in.nextInt();
		System.out.println("Digite o dia:");
		d=in.nextInt();
		switch (m) {
		case 1:
		{
			if (d>0 && d<=20) {
				System.out.println("Capric�nio");
			}else if(d>20 && d<=31){
				System.out.println("Aqu�rio");
			}
			break;
		}
		case 2:
		{
			if (d>0 && d<=18) {
				System.out.println("Aqu�rio");
			}else if (d>18 && d<=28) {
				System.out.println("Peixes");
			}
			break;
		}
		case 3:
		{
			if (d>0 && d<=20) {
				System.out.println("Peixes");
			}else if (d>20 && d<=31) {
				System.out.println("�ries");
			}
			break;
		}
		case 4:
		{
			if (d>0 && d<=20) {
				System.out.println("�ries");
			}else if (d>20 && d<=30) {
				System.out.println("Touro");
			}
			break;
		}
		case 5:
		{
			if (d>0 && d<=20) {
				System.out.println("Touro");
			}else if (d>20 && d<=31) {
				System.out.println("G�meos");
			}
			break;
		}
		case 6:
		{
			if (d>0 && d<=20) {
				System.out.println("G�meos");
			}else if (d>20 && d<=30) {
				System.out.println("C�ncer");
			}
			break;
		}
		case 7:
		{
			if (d>0 && d<=22) {
				System.out.println("C�ncer");
			}else if (d>22 && d<=31) {
				System.out.println("Le�o");
			}
			break;
		}
		case 8:
		{
			if (d>0 && d<=22) {
				System.out.println("Le�o");
			}else if (d>22 && d<=31) {
				System.out.println("Virgem");
			}
			break;
		}
		case 9:
		{
			if (d>0 && d<=22) {
				System.out.println("Virgem");
			}else if (d>22 && d<=30) {
				System.out.println("Libra");
			}
			break;
		}
		case 10:
		{
			if (d>0 && d<=22) {
				System.out.println("Libra");
			}else if (d>22 && d<=31) {
				System.out.println("Escorpi�o");
			}
			break;
		}
		case 11:
		{
			if (d>0 && d<=21) {
				System.out.println("Escorpi�o");
			}else if (d>21 && d<=30) {
				System.out.println("Sagit�rio");
			}
			break;
		}
		case 12:
		{
			if (d>0 && d<=21) {
				System.out.println("Sagit�rio");
			}else if (d>21 && d<=31) {
				System.out.println("Capric�rnio");
			}
			break;
		}
		}
		System.out.println("Signos n�o servem pra nada!");
	}
}
