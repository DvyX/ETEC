package Package;

import javax.swing.JOptionPane;

public class Calculo {

	private double peso,altura,imc;
	private String imcResultado;
	
	public double getPeso(){
		return peso;
	}
	
	public void setPeso(double peso){
		this.peso = peso;
	}
	
	public double getAltura(){
		return altura;
	}
	
	public void setAltura(double altura){
		this.altura = altura;
	}
	
	public double getImc(){
		return imc;
	}
	
	public void setImc(double imc){
		this.imc = imc;
	}
	
	public String getImcResultado(){
		return imcResultado;
	}
	
	public void setImcResultado(String imcResultado){
		this.imcResultado = imcResultado;
	}
	
	public void	lerValores() {
		altura = Double.parseDouble(JOptionPane.showInputDialog("Digite sua altura: "));
		peso = Double.parseDouble(JOptionPane.showInputDialog("Digite seu peso: "));
	}
	
	public void calcular() {
		imc = peso/(altura*altura);
	}
	
	public void comparar() {
		if(imc<18.5){
			imcResultado = "Abaixo do peso";
		}else if(imc<25){
			imcResultado = "Peso normal";
		}else if(imc<30){
			imcResultado = "Sobrepeso";
		}else if(imc<35){
			imcResultado = "Obesidade Grau 1";
		}else if(imc<40){
			imcResultado = "Obesidade Grau 2";
		}else {
			imcResultado = "Obesidade Grau 3";
		}
	}
	
	public void apresentar() {
		JOptionPane.showMessageDialog(null, String.format("Seu IMC �: %.1f\n",imc)+"Seu peso � considerado: "+imcResultado);
	}
	
}


