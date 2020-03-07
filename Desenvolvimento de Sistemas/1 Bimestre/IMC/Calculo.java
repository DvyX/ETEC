import java.util.Scanner;
public class Calculo {
	Scanner in = new Scanner(System.in);
	static double peso,altura,resultado;
	public static double altura(){
		Scanner in = new Scanner(System.in);
		System.out.println("Digite a altura:");
		altura = in.nextDouble();
		return altura;	
	}
	public static double peso(){
		Scanner in = new Scanner(System.in);
		System.out.println("Digite o peso:");
		peso = in.nextDouble();
		return peso;	
	}
	public static double calculo(){
		resultado = peso / (altura*altura);
		return resultado;	
	}
	public static void resultado(){
		System.out.println("O IMC é :"+resultado);
	}
	public static void media(){
		if (resultado < 18.5){
			System.out.println("Abaixo do peso");
		}else if (resultado > 18.5 && resultado < 25){
			System.out.println("Peso Ideal");
		}else if (resultado > 25 && resultado < 30){
			System.out.println("Sobre Peso");
		}else if (resultado > 30 && resultado < 35){
			System.out.println("Obesidade Grau 1");
		}else if (resultado > 35 && resultado < 40){
			System.out.println("Obesidade Grau 2");
		}else if (resultado > 40){
			System.out.println("Obesidade Grau 3");
		}
	}
}
