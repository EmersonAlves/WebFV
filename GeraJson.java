package br.com.koala.sgd.util;

import br.com.koala.sgd.exception.SGDException;
import br.com.koala.sgd.model.Usuario;
import br.com.koala.sgd.view.PrincipalView;
import java.io.FileWriter;
import java.io.IOException;
import java.rmi.RemoteException;
import java.util.logging.Level;
import java.util.logging.Logger;
import org.json.simple.JSONArray;
import org.json.simple.JSONObject;

public class GeraXML {

    public static void geraJson() {
        try {
            JSONObject obj = new JSONObject();
            JSONArray usuarios = new JSONArray();
            for (Usuario usuario : PrincipalView.fachada.getTodosUsuarios()) {
                JSONObject user = new JSONObject();
                user.put("idusuario",usuario.getIdUsuario());
                user.put("nomeexibicao",usuario.getNomeFantasia());
                user.put("nomefantasia",usuario.getNomeFantasia());
                user.put("email",usuario.getEmail());
                user.put("tipo",usuario.getTipo().toString());
                user.put("cpfcnpj",usuario.getIdUsuario());
                usuarios.add(user);
            }
            System.out.println(usuarios.size());
            obj.put("usuarios",usuarios);
            FileWriter file = new FileWriter("C:\\sgd\\dados.json");
            file.write(obj.toJSONString());
            file.flush();
            file.close();
        } catch (SGDException ex) {
            Logger.getLogger(GeraXML.class.getName()).log(Level.SEVERE, null, ex);
        } catch (RemoteException ex) {
            Logger.getLogger(GeraXML.class.getName()).log(Level.SEVERE, null, ex);
        } catch (IOException ex) {
            Logger.getLogger(GeraXML.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
}
