package CalculadoraIMC;

public class Calculo {

	public static void main(String[]args){
		
		CalculadoraIMC calc = new CalculadoraIMC();
		//calc.setAltura(1.82);
		//calc.setPeso(108.690);
		//calc.calcular();
		
		calc.lerValores();
		calc.calcular();
		calc.comparar();
		calc.apresentar();
		
	}
	
}
