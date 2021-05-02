//List of type variabel
export const ADD_AUTHTOKEN = 'ADD_TOKEN';

//list of method actions
export function addTokenByID(payload){
    const action = {
        type : ADD_AUTHTOKEN,
        payload
    }
    return action;
}