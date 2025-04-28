package tn.esprit.entities;

import java.util.ArrayList;
import java.util.List;

public class User {
    private int id;
    private String nom;
    private String email;
    private String password;
    private String tel;
    private String adress;
    private String role;
    private List<String> roles = new ArrayList<>();

    public User() {}

    public User(int id, String nom, String email, String password, String tel, String adress, String role, List<String> roles) {
        this.id = id;
        this.nom = nom;
        this.email = email;
        this.password = password;
        this.tel = tel;
        this.adress = adress;
        this.role = role;
        this.roles = roles;
    }

    // Getters and Setters

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public String getTel() {
        return tel;
    }

    public void setTel(String tel) {
        this.tel = tel;
    }

    public String getAdress() {
        return adress;
    }

    public void setAdress(String adress) {
        this.adress = adress;
    }

    public String getRole() {
        return role;
    }

    public void setRole(String role) {
        this.role = role;
    }

    public List<String> getRoles() {
        return roles;
    }

    public void setRoles(List<String> roles) {
        this.roles = roles;
    }

    @Override
    public String toString() {
        return "User{" +
                "id=" + id +
                ", nom='" + nom + '\'' +
                ", email='" + email + '\'' +
                ", tel='" + tel + '\'' +
                ", adress='" + adress + '\'' +
                ", role='" + role + '\'' +
                ", roles=" + roles +
                '}';
    }
}
