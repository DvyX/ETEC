import java.util.Scanner;

public class calcular {
	Scanner in = new Scanner(System.in);
	static int r,e,n1,n2;
	public static void ad (int n1, int n2) {
		r = n1 + n2;
		System.out.println(n1 +" + "+n2+" = "+r);
	}
	public static void sub (int n1, int n2) {
		r = n1 - n2;
		System.out.println(n1 +" - "+n2+" = "+r);
	}
	public static void mult (int n1, int n2) {
		r = n1 * n2;
		System.out.println(n1 +" X "+n2+" = "+r);
	}
	public static void div (int n1, int n2) {
		r = n1 / n2;
		System.out.println(n1 +" / "+n2+" = "+r);
	}
	public static int reade(){
		Scanner in = new Scanner(System.in);
		System.out.println("Qual operação deseja fazer? 1-Adição | 2-Subtração | 3-Multiplição | 4-Divisão");
		e = in.nextInt();
		return e;
	}
	public static int readn1(){
		Scanner in = new Scanner(System.in);
		System.out.println("Digite o primeiro número:");
		n1 = in.nextInt();
		return n1;
	}
	public static int readn2(){
		Scanner in = new Scanner(System.in);
		System.out.println("Digite o segundo número:");
		n2 = in.nextInt();
		return n2;
	}
	public static void escolha(){
		switch (e) {
		case 1:
		{
			calcular.ad(n1, n2);
			break;
		}
		case 2:
		{
			calcular.sub(n1, n2);
			break;
		}
		case 3:{
			calcular.mult(n1, n2);
			break;
		}
		case 4:
		{
			calcular.div(n1, n2);
			break;
		}
		default:{
			System.out.println("Número inválido");
			break;
		}
	}
	}
}