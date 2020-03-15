package Package;

public class Imc {

	public static void main(String[] args) {
		Calculo calc = new Calculo();
		//calc.setAltura(1.82);
		//calc.setPeso(108.690);
		//calc.calcular();
		
		calc.lerValores();
		calc.calcular();
		calc.comparar();
		calc.apresentar();

	}

}

