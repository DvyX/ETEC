package CalculadoraIMC;

import java.util.Scanner;

public class CalculadoraIMC {

	Scanner in = new Scanner(System.in);
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
	
	//método que lê valores
	public void	lerValores() {
		System.out.println("Digite sua altura: ");
		altura = in.nextDouble();
		System.out.println("Digite seu peso: ");
		peso = in.nextDouble();
	}
	
	//método que calcula o imc
	public void calcular() {
		imc = peso/(altura*altura);
	}
	
	//método que compara à tabela
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
	
	//método que apresenta o imc do usuario
	public void apresentar() {
		System.out.printf("Seu IMC é: %.1f\n",imc);
		System.out.println("Você Está: "+imcResultado);
	}
	
}
